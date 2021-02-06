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
            $table->string('s_name');
            $table->string('s_college');
            $table->string('s_department');
            $table->string('s_faculty');
            $table->string('s_year');
            $table->string('s_semester');
            $table->string('s_registration');
            $table->string('s_symbolno');
            $table->string('s_dob');
            $table->string('s_parent');
            $table->string('s_email');
            $table->string('s_mobile');
            $table->string('s_address');
            $table->unsignedBigInteger('department_id'); //define department_id column in student manages table
            $table->unsignedBigInteger('faculty_id');
            
            $table->foreign('department_id')->on('departments')->references('id'); //define relation
            $table->foreign('faculty_id')->on('faculties')->references('id');
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
