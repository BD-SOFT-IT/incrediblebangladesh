<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelPackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travel_packages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('package_category')->nullable();
            $table->string('package_title');
            $table->string('package_sub_title');
            $table->string('package_best_time');
            $table->string('package_duration');
            $table->integer('package_price');
            $table->integer('package_discount')->nullable();
            $table->integer('after_discount_price')->nullable();
            $table->text('package_description');
            $table->softDeletes();
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
        Schema::dropIfExists('travel_packages');
    }
}
