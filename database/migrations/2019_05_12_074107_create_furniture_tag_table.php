<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFurnitureTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('furniture_tag', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('furniture_id');
            $table->unsignedBigInteger('tag_id');
            $table->foreign('furniture_id')->references('id')->on('furnitures');
            $table->foreign('tag_id')->references('id')->on('tags');
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
        Schema::dropIfExists('furniture_tag');
    }
}
