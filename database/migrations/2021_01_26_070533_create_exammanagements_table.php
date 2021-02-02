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
            $table->string('Faculty');
            $table->string('semester');
            $table->string('subject');
            $table->date('Exam_Date');
            $table->time('Start_Time');
            $table->time('End_Time');
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
