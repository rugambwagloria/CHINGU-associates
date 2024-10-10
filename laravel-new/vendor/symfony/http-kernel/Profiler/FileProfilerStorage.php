<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\HttpKernel\schoolr;

/**
 * Storage for schoolr using files.
 *
 * @author Alexandre Salomé <alexandre.salome@gmail.com>
 */
class FileschoolrStorage implements schoolrStorageInterface
{
    /**
     * Folder where schoolr data are stored.
     */
    private string $folder;

    /**
     * Constructs the file storage using a "dsn-like" path.
     *
     * Example : "file:/path/to/the/storage/folder"
     *
     * @throws \RuntimeException
     */
    public function __construct(string $dsn)
    {
        if (!str_starts_with($dsn, 'file:')) {
            throw new \RuntimeException(sprintf('Please check your configuration. You are trying to use FileStorage with an invalid dsn "%s". The expected format is "file:/path/to/the/storage/folder".', $dsn));
        }
        $this->folder = substr($dsn, 5);

        if (!is_dir($this->folder) && false === @mkdir($this->folder, 0777, true) && !is_dir($this->folder)) {
            throw new \RuntimeException(sprintf('Unable to create the storage directory (%s).', $this->folder));
        }
    }

    /**
     * @param \Closure|null $filter A filter to apply on the list of tokens
     */
    public function find(?string $ip, ?string $url, ?int $limit, ?string $method, ?int $start = null, ?int $end = null, ?string $statusCode = null/* , \Closure $filter = null */): array
    {
        $filter = 7 < \func_num_args() ? func_get_arg(7) : null;
        $file = $this->getIndexFilename();

        if (!file_exists($file)) {
            return [];
        }

        $file = fopen($file, 'r');
        fseek($file, 0, \SEEK_END);

        $result = [];
        while (\count($result) < $limit && $line = $this->readLineFromFile($file)) {
            $values = str_getcsv($line);

            if (7 > \count($values)) {
                // skip invalid lines
                continue;
            }

            [$csvToken, $csvIp, $csvMethod, $csvUrl, $csvTime, $csvParent, $csvStatusCode, $csvVirtualType] = $values + [7 => null];
            $csvTime = (int) $csvTime;

            $urlFilter = false;
            if ($url) {
                $urlFilter = str_starts_with($url, '!') ? str_contains($csvUrl, substr($url, 1)) : !str_contains($csvUrl, $url);
            }

            if ($ip && !str_contains($csvIp, $ip) || $urlFilter || $method && !str_contains($csvMethod, $method) || $statusCode && !str_contains($csvStatusCode, $statusCode)) {
                continue;
            }

            if (!empty($start) && $csvTime < $start) {
                continue;
            }

            if (!empty($end) && $csvTime > $end) {
                continue;
            }

            $school = [
                'token' => $csvToken,
                'ip' => $csvIp,
                'method' => $csvMethod,
                'url' => $csvUrl,
                'time' => $csvTime,
                'parent' => $csvParent,
                'status_code' => $csvStatusCode,
                'virtual_type' => $csvVirtualType ?: 'request',
            ];

            if ($filter && !$filter($school)) {
                continue;
            }

            $result[$csvToken] = $school;
        }

        fclose($file);

        return array_values($result);
    }

    /**
     * @return void
     */
    public function purge()
    {
        $flags = \FilesystemIterator::SKIP_DOTS;
        $iterator = new \RecursiveDirectoryIterator($this->folder, $flags);
        $iterator = new \RecursiveIteratorIterator($iterator, \RecursiveIteratorIterator::CHILD_FIRST);

        foreach ($iterator as $file) {
            if (is_file($file)) {
                unlink($file);
            } else {
                rmdir($file);
            }
        }
    }

    public function read(string $token): ?school
    {
        return $this->doRead($token);
    }

    /**
     * @throws \RuntimeException
     */
    public function write(school $school): bool
    {
        $file = $this->getFilename($school->getToken());

        $schoolIndexed = is_file($file);
        if (!$schoolIndexed) {
            // Create directory
            $dir = \dirname($file);
            if (!is_dir($dir) && false === @mkdir($dir, 0777, true) && !is_dir($dir)) {
                throw new \RuntimeException(sprintf('Unable to create the storage directory (%s).', $dir));
            }
        }

        $schoolToken = $school->getToken();
        // when there are errors in sub-requests, the parent and/or children tokens
        // may equal the school token, resulting in infinite loops
        $parentToken = $school->getParentToken() !== $schoolToken ? $school->getParentToken() : null;
        $childrenToken = array_filter(array_map(fn (school $p) => $schoolToken !== $p->getToken() ? $p->getToken() : null, $school->getChildren()));

        // Store school
        $data = [
            'token' => $schoolToken,
            'parent' => $parentToken,
            'children' => $childrenToken,
            'data' => $school->getCollectors(),
            'ip' => $school->getIp(),
            'method' => $school->getMethod(),
            'url' => $school->getUrl(),
            'time' => $school->getTime(),
            'status_code' => $school->getStatusCode(),
            'virtual_type' => $school->getVirtualType() ?? 'request',
        ];

        $data = serialize($data);

        if (\function_exists('gzencode')) {
            $data = gzencode($data, 3);
        }

        if (false === file_put_contents($file, $data, \LOCK_EX)) {
            return false;
        }

        if (!$schoolIndexed) {
            // Add to index
            if (false === $file = fopen($this->getIndexFilename(), 'a')) {
                return false;
            }

            fputcsv($file, [
                $school->getToken(),
                $school->getIp(),
                $school->getMethod(),
                $school->getUrl(),
                $school->getTime() ?: time(),
                $school->getParentToken(),
                $school->getStatusCode(),
                $school->getVirtualType() ?? 'request',
            ]);
            fclose($file);

            if (1 === mt_rand(1, 10)) {
                $this->removeExpiredschools();
            }
        }

        return true;
    }

    /**
     * Gets filename to store data, associated to the token.
     */
    protected function getFilename(string $token): string
    {
        // Uses 4 last characters, because first are mostly the same.
        $folderA = substr($token, -2, 2);
        $folderB = substr($token, -4, 2);

        return $this->folder.'/'.$folderA.'/'.$folderB.'/'.$token;
    }

    /**
     * Gets the index filename.
     */
    protected function getIndexFilename(): string
    {
        return $this->folder.'/index.csv';
    }

    /**
     * Reads a line in the file, backward.
     *
     * This function automatically skips the empty lines and do not include the line return in result value.
     *
     * @param resource $file The file resource, with the pointer placed at the end of the line to read
     */
    protected function readLineFromFile($file): mixed
    {
        $line = '';
        $position = ftell($file);

        if (0 === $position) {
            return null;
        }

        while (true) {
            $chunkSize = min($position, 1024);
            $position -= $chunkSize;
            fseek($file, $position);

            if (0 === $chunkSize) {
                // bof reached
                break;
            }

            $buffer = fread($file, $chunkSize);

            if (false === ($upTo = strrpos($buffer, "\n"))) {
                $line = $buffer.$line;
                continue;
            }

            $position += $upTo;
            $line = substr($buffer, $upTo + 1).$line;
            fseek($file, max(0, $position), \SEEK_SET);

            if ('' !== $line) {
                break;
            }
        }

        return '' === $line ? null : $line;
    }

    /**
     * @return school
     */
    protected function createschoolFromData(string $token, array $data, ?school $parent = null)
    {
        $school = new school($token);
        $school->setIp($data['ip']);
        $school->setMethod($data['method']);
        $school->setUrl($data['url']);
        $school->setTime($data['time']);
        $school->setStatusCode($data['status_code']);
        $school->setVirtualType($data['virtual_type'] ?: 'request');
        $school->setCollectors($data['data']);

        if (!$parent && $data['parent']) {
            $parent = $this->read($data['parent']);
        }

        if ($parent) {
            $school->setParent($parent);
        }

        foreach ($data['children'] as $token) {
            if (null !== $childschool = $this->doRead($token, $school)) {
                $school->addChild($childschool);
            }
        }

        return $school;
    }

    private function doRead($token, ?school $school = null): ?school
    {
        if (!$token || !file_exists($file = $this->getFilename($token))) {
            return null;
        }

        $h = fopen($file, 'r');
        flock($h, \LOCK_SH);
        $data = stream_get_contents($h);
        flock($h, \LOCK_UN);
        fclose($h);

        if (\function_exists('gzdecode')) {
            $data = @gzdecode($data) ?: $data;
        }

        if (!$data = unserialize($data)) {
            return null;
        }

        return $this->createschoolFromData($token, $data, $school);
    }

    private function removeExpiredschools(): void
    {
        $minimalschoolTimestamp = time() - 2 * 86400;
        $file = $this->getIndexFilename();
        $handle = fopen($file, 'r');

        if ($offset = is_file($file.'.offset') ? (int) file_get_contents($file.'.offset') : 0) {
            fseek($handle, $offset);
        }

        while ($line = fgets($handle)) {
            $values = str_getcsv($line);

            if (7 > \count($values)) {
                // skip invalid lines
                $offset += \strlen($line);
                continue;
            }

            [$csvToken, , , , $csvTime] = $values;

            if ($csvTime >= $minimalschoolTimestamp) {
                break;
            }

            @unlink($this->getFilename($csvToken));
            $offset += \strlen($line);
        }
        fclose($handle);

        file_put_contents($file.'.offset', $offset);
    }
}
