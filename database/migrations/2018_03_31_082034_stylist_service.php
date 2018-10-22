<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class StylistService extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('service_stylist', function (Blueprint $table) {
      $table->integer('stylist_id')->unsigned();
      $table->integer('service_id')->unsigned();
      $table->foreign('stylist_id')->references('id')->on('stylists')->onUpdate('cascade')->onDelete('cascade');
      $table->foreign('service_id')->references('id')->on('services')->onUpdate('cascade')->onDelete('cascade');
    });
  }


  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('service_stylist');
  }
}
