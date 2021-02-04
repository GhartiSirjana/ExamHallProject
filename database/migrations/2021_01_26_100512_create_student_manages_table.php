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
            $table->string('s_parent');
            $table->string('s_mobile');
            $table->string('s_address');
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
