<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('challenge', function (Blueprint $challenge) {
            $challenge->id('challenge_id');
            $challenge->string('challenge_name', 50)->unique();
            $challenge->string('challenge_description', 300)->nullable();
            $challenge->date('challenge_start_date');
            $challenge->date('challenge_end_date');
            $challenge->integer('wrong_answer_marks')->nullable();
            $challenge->integer('blank_answer_marks')->nullable();
            $challenge->integer('questions_to_answer')->nullable();
            $challenge->unsignedBigInteger('admin_id')->nullable();
            $challenge->foreign('admin_id')->references('id')->on('admin');
            $challenge->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('challenge');
    }
};
