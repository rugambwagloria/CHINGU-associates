<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChallengeController extends Controller
{
    public function index()
{
    // Logic for displaying active challenges (if needed)
    return view('challenge-creation'); // Adjust the view name
}

public function create()
{
    // Logic for creating a new challenge (if needed)
    return view('challenge-creation'); // Make sure the view file exists
}
public function store(Request $request)
{
    // Validate the incoming request data
    $request->validate([
        'challenge_name' => 'required|string|max:255',
        'challenge_number' => 'required|string|max:20',
        'start_date' => 'required|date',
        'finish_date' => 'required|date',
        'mark_for_answer' => 'boolean', // Adjust validation rules as needed
    ]);

    // Create a new challenge instance
    $challenge = new Challenge();
    $challenge->name = $request->input('challenge_name');
    $challenge->number = $request->input('challenge_number');
    $challenge->start_date = $request->input('start_date');
    $challenge->finish_date = $request->input('finish_date');
    $challenge->mark_for_answer = $request->input('mark_for_answer', false); // Default to false if not provided

    // Save the challenge to the database
    $challenge->save();

    // Redirect or respond as needed (e.g., return a success message)
    return redirect()->route('challenge-management')->with('success', 'Challenge created successfully!');
}

}
