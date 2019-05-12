<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFurnitureOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('furniture_order', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('furniture_id');
            $table->unsignedBigInteger('order_id');
            $table->foreign('furniture_id')->references('id')->on('furnitures');
            $table->foreign('order_id')->references('id')->on('orders');
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
        Schema::dropIfExists('furniture_order');
    }
}
