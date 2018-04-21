<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ServiceStylistCategory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_stylistcategory', function (Blueprint $table){
          $table->integer('service_id')->unsigned();
          $table->foreign('service_id')->references('id')->on('services');
          $table->integer('stylistcategory_id')->unsigned();
          $table->foreign('stylistcategory_id')->references('id')->on('stylistcategories');
          $table->float('price');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('service_stylistcategory');
    }
}
