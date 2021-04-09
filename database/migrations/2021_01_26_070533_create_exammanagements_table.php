<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExammanagementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exammanagements', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->unsignedBigInteger('department_id');
            $table->unsignedBigInteger('faculty_id');
            $table->unsignedBigInteger('subject_id');
            $table->string('semester');
            $table->date('Exam_Date');
            $table->time('Start_Time');
            $table->time('End_Time');
            $table->foreign('department_id')->on('departments')->references('id');
            $table->foreign('faculty_id')->on('faculties')->references('id');
            $table->foreign('subject_id')->on('subjects')->references('id');

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
        Schema::dropIfExists('exammanagements');
    }
}
