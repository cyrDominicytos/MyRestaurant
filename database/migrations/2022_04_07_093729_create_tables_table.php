<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tables', function (Blueprint $table) {
            $table->id('tabel_id');
            $table->integer('table_number');
            $table->boolean('table_status')->default(false);
            $table->integer('table_number_personne');
            $table->timestamps();
        });
    }


//     table_id:int 
// table_number:int
// table_status:boolean
// table_number_personn:int  
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tables');
    }
}
