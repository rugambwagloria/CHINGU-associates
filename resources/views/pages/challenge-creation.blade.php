@extends('layouts.app',['class' => 'g-sidenav-show bg-gray-100'])


  @include('layouts.navbars.auth.topnav', ['title' => 'Challenge Creation'])
<div  style="text-align:center;">
    <!-- Active Challenges Section -->
    <div class="active-challenges">
        <h2>Active Challenges</h2>

    </div>

    <!-- Challenge Creation Section -->
    <div class="challenge-creation"style="visibility:visible;">
        <h2>Challenge Creation</h2>
        <form action="{{ route('challengeIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIII+Os.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="challengeName">Challenge Name</label>
                <input type="text" id="challengeName" name="challenge_name" required>
            </div>
            <div class="form-group">
                <label for="challengeNumber">Challenge Number</label>
                <input type="text" id="challengeNumber" name="challenge_number" required>
            </div>
            <div class="form-group">
                <label for="startDate">Start Date</label>
                <input type="date" id="startDate" name="start_date" required>
            </div>
            <div class="form-group">
                <label for="finishDate">Finish Date</label>
                <input type="date" id="finishDate" name="finish_date" required>
            </div>
            <div class="form-group">
                <input type="checkbox" id="markForAnswer" name="mark_for_answer">
                <label for="markForAnswer">Mark work for answer</label>
            </div>
            <button type="submit" class="btn btn-primary">Create Challenge</button>
        </form>
    </div>

    <!-- Finished Challenges Section -->
    <div class="finished-challenges">
        <h2>Finished Challenges</h2>
        <!-- Content here -->
    </div>

    <!-- Document Upload Section -->
    <div class="document-upload">
        <h2>Question and Answer Document Upload</h2>
        <form  method="POST" action="/upload" enctype="multipart/form-data">
    @csrf
    <input type="file" name="file">
    <button type="submit">Upload</button>

            <div class="form-group">
                <label for="questionCode">Question Code</label>
                <input type="text" id="questionCode" name="question_code" required>
            </div>
            <div class="form-group">
                <label for="answers">Answers.txt</label>
                <input type="file" id="answers" name="answers" required>
            </div>
            <button type="submit" class="btn btn-primary">Upload</button>
        </form>
    </div>
</div>

