<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

<<<<<<< HEAD:database/migrations/2021_02_06_152844_create_colleges_table.php
class CreateCollegesTable extends Migration
=======
class CreateRoommanagmentsTable extends Migration
>>>>>>> 8937d950d7114bf503d2a31171a8fcd535655adf:database/migrations/2021_02_05_012542_create_roommanagments_table.php
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
<<<<<<< HEAD:database/migrations/2021_02_06_152844_create_colleges_table.php
        Schema::create('colleges', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address');
            $table->text('description');
          
=======
        Schema::create('roommanagments', function (Blueprint $table) {
            $table->id();
            $table->integer('room_no');
            $table->string('block');
            $table->string('floor');
            $table->integer('capacity');
            $table->integer('no_of_rows');
            $table->integer('no_of_colums');

>>>>>>> 8937d950d7114bf503d2a31171a8fcd535655adf:database/migrations/2021_02_05_012542_create_roommanagments_table.php
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
<<<<<<< HEAD:database/migrations/2021_02_06_152844_create_colleges_table.php
        Schema::dropIfExists('colleges');
=======
        Schema::dropIfExists('roommanagments');
>>>>>>> 8937d950d7114bf503d2a31171a8fcd535655adf:database/migrations/2021_02_05_012542_create_roommanagments_table.php
    }
}
