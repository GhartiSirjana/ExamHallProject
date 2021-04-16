<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentManagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_manages', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('college_id');
            $table->unsignedBigInteger('faculty_id');
            $table->unsignedBigInteger('department_id');
            $table->string('year');
            $table->string('semester');
            $table->string('registerNumber');
            $table->string('symbolno');
            $table->string('dob');
            $table->string('email');
            $table->string('parent');
            $table->string('mobile');
            $table->string('address');
            $table->foreign('college_id')->on('colleges')->references('id');
            $table->foreign('faculty_id')->on('faculties')->references('id');
            $table->foreign('department_id')->on('departments')->references('id');
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
        Schema::dropIfExists('student_manages');
    }
}
