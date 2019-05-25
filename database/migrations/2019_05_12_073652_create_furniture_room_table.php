<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFurnitureRoomTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('furniture_room', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('furniture_id');
            $table->unsignedBigInteger('room_id');
            $table->unsignedBigInteger('quantity');
            $table->foreign('furniture_id')->references('id')->on('furnitures');
            $table->foreign('room_id')->references('id')->on('rooms');
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
        Schema::dropIfExists('furniture_room');
    }
}
