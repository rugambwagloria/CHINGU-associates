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
        Schema::create('question', function (Blueprint $question) {
            $question->id();
            $question->string('question', 300);
            $question->string('answer', 50);
            $question->integer('marks')->default(1);
            $question->unsignedBigInteger('challenge_id')->nullable();
            $question->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
