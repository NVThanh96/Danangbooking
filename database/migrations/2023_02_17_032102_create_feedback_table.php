<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeedbackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feedback', function (Blueprint $table) {
            $table->id();
        /*    $table->unsignedBigInteger('idHotel')->nullable();
            $table->foreign('idHotel')->references('id')->on('hotels');
            $table->unsignedBigInteger('idService')->nullable();
            $table->foreign('idService')->references('id')->on('services');
            $table->unsignedBigInteger('idRoom')->nullable();
            $table->foreign('idRoom')->references('id')->on('rooms');*/
            $table->string('first_name');
            $table->string('last_name');
            $table->string('phone');
            $table->string('email');
            $table->string('title');
            $table->string('message');
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
        Schema::dropIfExists('feedback');
    }
}
