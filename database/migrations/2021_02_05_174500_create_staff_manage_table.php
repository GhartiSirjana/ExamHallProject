<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffManageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff_manage', function (Blueprint $table) {
            $table->id();
            $table->string('staffname');
            $table->unsignedBigInteger('department_id');
            $table->timestamps();
            $table->foreign('department_id')->on('departments')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('staff_manage');
    }
}
