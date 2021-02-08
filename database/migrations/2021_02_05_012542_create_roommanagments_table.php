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
            $table->integer('room_no');
            $table->string('block');
            $table->string('floor');
            $table->integer('capacity');
            $table->integer('no_of_rows');
            $table->integer('no_of_colums');

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
