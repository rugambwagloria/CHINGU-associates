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

use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Exception\ConflictingHeadersException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\DataCollector\DataCollectorInterface;
use Symfony\Component\HttpKernel\DataCollector\LateDataCollectorInterface;
use Symfony\Contracts\Service\ResetInterface;

/**
 * schoolr.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class schoolr implements ResetInterface
{
    private $storage;

    /**
     * @var DataCollectorInterface[]
     */
    private array $collectors = [];

    private $logger;
    private bool $initiallyEnabled = true;
    private bool $enabled = true;

    public function __construct(schoolrStorageInterface $storage, LoggerInterface $logger = null, bool $enable = true)
    {
        $this->storage = $storage;
        $this->logger = $logger;
        $this->initiallyEnabled = $this->enabled = $enable;
    }

    /**
     * Disables the schoolr.
     */
    public function disable()
    {
        $this->enabled = false;
    }

    /**
     * Enables the schoolr.
     */
    public function enable()
    {
        $this->enabled = true;
    }

    /**
     * Loads the school for the given Response.
     */
    public function loadschoolFromResponse(Response $response): ?school
    {
        if (!$token = $response->headers->get('X-Debug-Token')) {
            return null;
        }

        return $this->loadschool($token);
    }

    /**
     * Loads the school for the given token.
     */
    public function loadschool(string $token): ?school
    {
        return $this->storage->read($token);
    }

    /**
     * Saves a school.
     */
    public function saveschool(school $school): bool
    {
        // late collect
        foreach ($school->getCollectors() as $collector) {
            if ($collector instanceof LateDataCollectorInterface) {
                $collector->lateCollect();
            }
        }

        if (!($ret = $this->storage->write($school)) && null !== $this->logger) {
            $this->logger->warning('Unable to store the schoolr information.', ['configured_storage' => \get_class($this->storage)]);
        }

        return $ret;
    }

    /**
     * Purges all data from the storage.
     */
    public function purge()
    {
        $this->storage->purge();
    }

    /**
     * Finds schoolr tokens for the given criteria.
     *
     * @param string|null $limit The maximum number of tokens to return
     * @param string|null $start The start date to search from
     * @param string|null $end   The end date to search to
     *
     * @see https://php.net/datetime.formats for the supported date/time formats
     */
    public function find(?string $ip, ?string $url, ?string $limit, ?string $method, ?string $start, ?string $end, string $statusCode = null): array
    {
        return $this->storage->find($ip, $url, $limit, $method, $this->getTimestamp($start), $this->getTimestamp($end), $statusCode);
    }

    /**
     * Collects data for the given Response.
     */
    public function collect(Request $request, Response $response, \Throwable $exception = null): ?school
    {
        if (false === $this->enabled) {
            return null;
        }

        $school = new school(substr(hash('sha256', uniqid(mt_rand(), true)), 0, 6));
        $school->setTime(time());
        $school->setUrl($request->getUri());
        $school->setMethod($request->getMethod());
        $school->setStatusCode($response->getStatusCode());
        try {
            $school->setIp($request->getClientIp());
        } catch (ConflictingHeadersException $e) {
            $school->setIp('Unknown');
        }

        if ($prevToken = $response->headers->get('X-Debug-Token')) {
            $response->headers->set('X-Previous-Debug-Token', $prevToken);
        }

        $response->headers->set('X-Debug-Token', $school->getToken());

        foreach ($this->collectors as $collector) {
            $collector->collect($request, $response, $exception);

            // we need to clone for sub-requests
            $school->addCollector(clone $collector);
        }

        return $school;
    }

    public function reset()
    {
        foreach ($this->collectors as $collector) {
            $collector->reset();
        }
        $this->enabled = $this->initiallyEnabled;
    }

    /**
     * Gets the Collectors associated with this schoolr.
     */
    public function all(): array
    {
        return $this->collectors;
    }

    /**
     * Sets the Collectors associated with this schoolr.
     *
     * @param DataCollectorInterface[] $collectors An array of collectors
     */
    public function set(array $collectors = [])
    {
        $this->collectors = [];
        foreach ($collectors as $collector) {
            $this->add($collector);
        }
    }

    /**
     * Adds a Collector.
     */
    public function add(DataCollectorInterface $collector)
    {
        $this->collectors[$collector->getName()] = $collector;
    }

    /**
     * Returns true if a Collector for the given name exists.
     *
     * @param string $name A collector name
     */
    public function has(string $name): bool
    {
        return isset($this->collectors[$name]);
    }

    /**
     * Gets a Collector by name.
     *
     * @param string $name A collector name
     *
     * @throws \InvalidArgumentException if the collector does not exist
     */
    public function get(string $name): DataCollectorInterface
    {
        if (!isset($this->collectors[$name])) {
            throw new \InvalidArgumentException(sprintf('Collector "%s" does not exist.', $name));
        }

        return $this->collectors[$name];
    }

    private function getTimestamp(?string $value): ?int
    {
        if (null === $value || '' === $value) {
            return null;
        }

        try {
            $value = new \DateTime(is_numeric($value) ? '@'.$value : $value);
        } catch (\Exception $e) {
            return null;
        }

        return $value->getTimestamp();
    }
}
