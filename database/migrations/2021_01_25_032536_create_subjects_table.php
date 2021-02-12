<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subjects', function (Blueprint $table) {
            $table->id();
            $table->string('subjectname');
            $table->string('subjectcode');
            $table->string('semester');
            $table->unsignedBigInteger('faculty_id'); 
            
            $table->unsignedBigInteger('department_id');
             
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
        Schema::dropIfExists('subjects');
    }
}
