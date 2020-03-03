<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travel_schedules', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('package_id');
            $table->string('package_schedule');
            $table->string('package_schedule_time');
            $table->string('package_max_member');
            $table->text('package_ex_description')->nullable();
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
        Schema::dropIfExists('travel_schedules');
    }
}
