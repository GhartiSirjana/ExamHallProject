<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffManagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff_manages', function (Blueprint $table) {
            $table->id();
            $table->string('staffname');
<<<<<<< HEAD:database/migrations/2021_01_25_053002_create_staffs_table.php
            $table->foreignId('department_id');
            $table->timestamps();
=======
            $table->unsignedBigInteger('department_id');
            $table->timestamps();
            $table->foreign('department_id')->on('departments')->references('id');
>>>>>>> e2e73e301a57d5938010a089445e302f82384049:database/migrations/2021_02_05_174500_create_staff_manage_table.php
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('staff_manages');
    }
}
