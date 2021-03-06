<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{

  public function up()
  {
    Schema::create('users', function (Blueprint $table) {
      $table->increments('id');
      $table->string('name');
      $table->string('email')->unique();
      $table->string('password');
      $table->string('second_name')->nullable();
      $table->string('city')->nullable();
      $table->string('cityTranslit')->nullable();
      $table->string('phone_number')->nullable();
      $table->string('avatar')->nullable();
      $table->integer('role_id')->unsigned()->nullable();
      $table->foreign('role_id')->references('id')->on('roles');
      $table->rememberToken();
      $table->timestamps();
    });


  }

  public function down()
  {
    Schema::dropIfExists('users');
  }
}
