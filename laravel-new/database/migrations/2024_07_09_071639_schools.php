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
        Schema::create('schools', function (Blueprint $schools) {
            $schools->string('school_name', 50);
            $schools->string('school_regNo', 15)->primary();
            $schools->string('school_district', 50);
            $schools->string('rep_fname', 25);
            $schools->string('rep_lname', 25);
            $schools->string('rep_email', 50);
            $schools->unsignedBigInteger('admin_id')->nullable();


            // Define foreign key
            $schools->foreign('admin_id')->references('id')->on('admin');
        });
        Schema::table('schools', function (Blueprint $table) {
            $table->dropColumn(['school_address', 'updated_at', 'created_at']);
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schools');
    }
};
