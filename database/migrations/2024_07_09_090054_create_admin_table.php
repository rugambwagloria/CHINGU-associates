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
        Schema::create('rejected_participant', function (Blueprint $table) {
            $table->id();
            $table->string('fname', 25)->nullable();
            $table->string('lname', 25)->nullable();
            $table->string('email', 50)->unique();
            $table->string('phone', 15)->nullable();
            $table->string('schoolRegNo', 15)->unique();
            $table->string('username', 55)->unique();
            $table->string('password', 200)->nullable();
            $table->date('dob')->nullable();
            $table->string('image', 255)->nullable();
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
        Schema::dropIfExists('admin');
    }
};
