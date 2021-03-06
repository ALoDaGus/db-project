<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateRoom extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('member_id')->nullable();
            $table->double('room_price');
            $table->string('rental_status');
            $table->timestamps();
        });

        DB::table('room')->insert(
            array(
                ['id' => 1,
                'room_price' => 100,
                'rental_status' => 'free',
                'created_at' => new DateTime('now'),
                'updated_at' => new DateTime('now')],

                ['id' => 2,
                'room_price' => 200,
                'rental_status' => 'free',
                'created_at' => new DateTime('now'),
                'updated_at' => new DateTime('now')],

                ['id' => 3,
                'room_price' => 300,
                'rental_status' => 'free',
                'created_at' => new DateTime('now'),
                'updated_at' => new DateTime('now')],

                ['id' => 4,
                'room_price' => 400,
                'rental_status' => 'free',
                'created_at' => new DateTime('now'),
                'updated_at' => new DateTime('now')],

                ['id' => 5,
                'room_price' => 500,
                'rental_status' => 'free',
                'created_at' => new DateTime('now'),
                'updated_at' => new DateTime('now')],
                
                ['id' => 6,
                'room_price' => 600,
                'rental_status' => 'free',
                'created_at' => new DateTime('now'),
                'updated_at' => new DateTime('now')],
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('room');
    }
}
