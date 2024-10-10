<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use Illuminate\Http\Request;

class AnswerController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'participant_challenge_id' => 'required|exists:participant_challenges,id',
            'question_id' => 'required|exists:questions,id',
            'answer' => 'required|string|max:50',
        ]);

        $question = Question::findOrFail($request->question_id);

        $answer = Answer::create([
            'participant_challenge_id' => $request->participant_challenge_id,
            'question_id' => $request->question_id,
            'answer' => $request->answer,
            'marks' => ($request->answer === $question->answer) ? $question->marks : 0,
        ]);

        return response()->json($answer, 201);
    }

    // Other methods like index(), show(), update()
}