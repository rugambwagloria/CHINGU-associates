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
        Schema::create('participant_answer', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('participant_challenge_id')->nullable();
            $table->unsignedBigInteger('question_id')->nullable();
            $table->integer('marks')->default(0);
            $table->string('answer', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('participant_answer');
    }
};
