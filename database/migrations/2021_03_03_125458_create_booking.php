<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooking extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking', function (Blueprint $table) {
            $table->id();
            $table->string('booking_id');
            $table->string('room_id');
            $table->string('member_id');
            $table->string('booking_date');
            $table->date('check_in');
            $table->date('check_out');
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
        Schema::dropIfExists('booking');
    }
}