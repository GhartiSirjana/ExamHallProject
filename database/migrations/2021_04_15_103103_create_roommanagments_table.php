<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoommanagmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roommanagments', function (Blueprint $table) {
            $table->id();
            $table->string('roomno');
            $table->unsignedBigInteger('block_id');
            $table->foreign('block_id')->on('blocks')->references('id');
            $table->unsignedBigInteger('floor_id');
            $table->foreign('floor_id')->on('floors')->references('id');
            $table->string('capacity');
            $table->string('rows');
            $table->string('columns');
            $table->unsignedBigInteger('staff_id');
            $table->foreign('staff_id')->on('staff_manages')->references('id');
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
        Schema::dropIfExists('roommanagments');
    }
}
