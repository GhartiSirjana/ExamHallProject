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
            $table->string('block');
            $table->string('floor');
            $table->string('capacity');
            $table->string('rows');
            $table->string('columns');
            $table->string('invigilator');
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
