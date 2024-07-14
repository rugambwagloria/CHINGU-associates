@extends('layouts.app',['class' => 'g-sidenav-show bg-gray-100'])


  @include('layouts.navbars.auth.topnav', ['title' => 'Challenge Creation'])

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Challenge List</title>
    <!-- Add your CSS links here -->
</head>
<body style="text-align:center;" >
    <h1>Challenges</h1>

    <!-- Display success message if any -->
    <?php if(session('success')): ?>
        <div class="alert alert-success">
            <?php echo session('success'); ?>
        </div>
    <?php endif; ?>

    <!-- Add a link to create a new challenge -->
    <a href="<?php echo route('challenges.create'); ?>">Create New Challenge</a>

    <!-- Check if there are any challenges -->
    <?php if($allChallenges->count() > 0): ?>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>description</th>
                    <th>Start Date</th>
                    <th>Finish Date</th>
                    <th>Mark for Answer</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($allChallenges as $challenge): ?>
                    <tr>
                        <td><?php echo $challenge->challenge_name; ?></td>
                        <td><?php echo $challenge->challenge_id; ?></td>
                        <td><?php echo $challenge->challenge_start_date; ?></td>
                        <td><?php echo $challenge->challenge_date; ?></td>
                        <td><?php echo $challenge->mark_for_answer;?>/td>
                        <td>
                            <a href="<?php echo route('challenges.show', $challenge->id); ?>">View</a>
                            <a href="<?php echo route('challenges.edit', $challenge->id); ?>">Edit</a>
                            <!-- Add a delete form here if needed -->
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>No challenges found.</p>
    <?php endif; ?>

    
</body>
</html>