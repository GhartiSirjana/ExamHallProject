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
            $table->string('college');
            $table->string('department');
            $table->string('faculty');
            $table->string('year');
            $table->string('semester');
            $table->string('registerNumber');
            $table->string('symbolno');
            $table->string('dob');
            $table->string('parent');
            $table->string('email');
            $table->string('mobile');
            $table->string('address');
            $table->unsignedBigInteger('department_id'); //define department_id column in student manages table
            $table->unsignedBigInteger('faculty_id');
            // $table->unsignedBigInteger('college_id');
            
            $table->foreign('department_id')->on('departments')->references('id'); //define relation
            $table->foreign('faculty_id')->on('faculties')->references('id');
            $table->foreign('college_id')->on('college')->references('id');
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
