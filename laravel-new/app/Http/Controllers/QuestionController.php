<?php

namespace App\Http\Controllers;

use App\Models\Challenge;
use App\Models\Question;
use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\IOFactory;

class QuestionController extends Controller
{
    public function upload(Request $request)
    {
        $request->validate([
            'challenge_id' => 'required|exists:challenges,id',
            'question_document' => 'required|file|mimes:xlsx,xls',
        ]);

        $challenge = Challenge::findOrFail($request->challenge_id);

        // Process Excel file and create questions
        $spreadsheet = IOFactory::load($request->file('question_document'));
        $worksheet = $spreadsheet->getActiveSheet();

        foreach ($worksheet->getRowIterator() as $row) {
            $cellIterator = $row->getCellIterator();
            $cellIterator->setIterateOnlyExistingCells(false);

            $rowData = [];
            foreach ($cellIterator as $cell) {
                $rowData[] = $cell->getValue();
            }

            // Assuming the Excel has columns: question, answer, marks
            Question::create([
                'question' => $rowData[0],
                'answer' => $rowData[1],
                'marks' => $rowData[2] ?? 1,
                'challenge_id' => $challenge->id,
            ]);
        }

        return redirect()->route('challenges-index')->with('success', 'Questions uploaded successfully!');
    }
}