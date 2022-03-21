<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->date('birthday')->nullable();
            $table->string('sex')->nullable();
            $table->string('adress')->nullable();
            $table->string('phone_number')->unique();
            $table->string('origin')->nullable();
            $table->boolean('isbanned')->default(false);
            $table->string('profil_image')->nullable();
            $table->unsignedBigInteger('role_user_id');
            $table->rememberToken();
            $table->timestamps();
            $table->foreign('role_user_id')->references('role_id')->on('roles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
