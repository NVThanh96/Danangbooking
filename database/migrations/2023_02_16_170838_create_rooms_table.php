<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idCategoryRoom');
            $table->foreign('idCategoryRoom')->references('id')->on('roomCategories');
            $table->unsignedBigInteger('idHotel');
            $table->foreign('idHotel')->references('id')->on('hotels');
            $table->unsignedBigInteger('idDiscount')->nullable();
            $table->foreign('idDiscount')->references('id')->on('discounts');
            $table->string('image')->nullable();
            $table->integer('roomNumber');
            $table->integer('bedNumber');
            $table->integer('adultNumber');
            $table->integer('childNumber');
            $table->string('content');
            $table->integer('price');
            $table->integer('status');
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
        Schema::dropIfExists('rooms');
    }
}
