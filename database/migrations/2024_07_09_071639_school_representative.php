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
        Schema::create('school_representative', function (Blueprint $table) {
            $table->string('school_name', 50);
            $table->string('school_regNo', 15)->primary();
            $table->string('school_address', 100);
            $table->string('school_district', 50);
            $table->string('school_phone', 15);
            $table->string('rep_fname', 25);
            $table->string('rep_lname', 25);
            $table->string('rep_email', 50);
            $table->string('rep_phone', 15);
            $table->string('rep_password', 150);
            $table->unsignedBigInteger('admin_id')->nullable();
            $table->string('rep_username', 55)->unique();
    
            $table->timestamps();

            // Define foreign key
            $table->foreign('admin_id')->references('id')->on('admin');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('school_representative');
    }
};
