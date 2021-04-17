<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeatallocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seatallocations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('room_id');
            $table->unsignedBigInteger('exam_id');
            $table->foreign('room_id')->on('roommanagments')->references('id');
            $table->foreign('exam_id')->on('exammanagements')->references('id');
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
        Schema::dropIfExists('seatallocations');
    }
}
