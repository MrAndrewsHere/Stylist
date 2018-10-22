<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('client_id')->unsigned();
            $table->foreign('client_id')->references('id')->on('clients')->onUpdate('cascade');
            $table->integer('stylist_id')->unsigned();
          $table->foreign('stylist_id')->references('id')->on('stylists')->onUpdate('cascade');
            $table->integer('service_id')->unsigned();
          $table->foreign('service_id')->references('id')->on('services')->onUpdate('cascade');
//          $table->boolean('confirmed_by_stylist')->default('0');
            $table->decimal('Total_price')->nullable();
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
        Schema::dropIfExists('orders');
    }
}
