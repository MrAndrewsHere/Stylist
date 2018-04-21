<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableOrders extends Migration
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
        $table->integer('service_id')->unsigned();
        $table->integer('stylist_id')->unsigned();
        $table->foreign('client_id')->references('id')->on('clients')->onUpdate('cascade')->onDelete('cascade');
        $table->foreign('service_id')->references('id')->on('services')->onUpdate('cascade')->onDelete('cascade');
        $table->foreign('stylist_id')->references('id')->on('stylists')->onUpdate('cascade')->onDelete('cascade');
        $table->string('format')->default('Оффлайн');
        $table->boolean('confirmed_by_stylist')->default(0);
        $table->date('Confirme_Date')->nullable();
        $table->boolean('Complited')->default(0);
        $table->boolean('Confirmed_complite')->default(0);
        $table->boolean('Ordered')->default(0);
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
