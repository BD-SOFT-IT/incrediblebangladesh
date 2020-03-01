<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEcommercesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ecommerces', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('product_title');
            $table->string('product_brand');
            $table->string('product_category');
            $table->string('product_code');
            $table->string('product_price');
            $table->string('product_img_path');
            $table->string('product_discount')->nullable();
            $table->string('after_discount_price')->nullable();
            $table->string('product_description');
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
        Schema::dropIfExists('ecommerces');
    }
}
