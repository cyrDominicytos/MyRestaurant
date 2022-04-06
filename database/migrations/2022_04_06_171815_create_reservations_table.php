<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id("reservation_id");
            $table->integer("reservation_people");
            $table->date("reservation_days");
            $table->string("reservation_datail");
            $table->string('reservation_type');
            $table->unsignedBigInteger("reservation_user_id");
            $table->timestamps();
            $table->foreign('reservation_user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservations');
    }
}
