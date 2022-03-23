<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mets', function (Blueprint $table) {
            $table->id('met_id');
            $table->string('met_name')->unique();
            $table->string('met_description');
            $table->double('met_price');
            $table->string('met_image');
            $table->integer('met_status');
            $table->integer('met_type');
            $table->integer('met_day')->nullable();
            $table->unsignedBigInteger('categorie_met_id');
            $table->timestamps();
            $table->foreign('categorie_met_id')->references('met_categorie_id')->on('met_categories')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mets');
    }
}
