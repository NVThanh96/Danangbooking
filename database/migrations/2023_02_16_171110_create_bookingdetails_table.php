<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookingdetails', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idBooking');
            $table->foreign('idBooking')->references('id')->on('bookings');
            $table->unsignedBigInteger('idHotel');
            $table->foreign('idHotel')->references('id')->on('hotels');
            $table->unsignedBigInteger('idService')->nullable();
            $table->foreign('idService')->references('id')->on('services');
            $table->unsignedBigInteger('idRoom');
            $table->foreign('idRoom')->references('id')->on('rooms');
            $table->date('checkin');
            $table->date('checkout');
            $table->float('total');
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
        Schema::dropIfExists('bookingdetails');
    }
}
