<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuDaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_days', function (Blueprint $table) {
            $table->id('menu_days_id');
            $table->integer('type_met');
            $table->integer('type_days');
            $table->unsignedBigInteger('met_menu_days_id');
            $table->timestamps();
            $table->foreign('met_menu_days_id')->references('met_id')->on('mets')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menu_days');
    }
}
