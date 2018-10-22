<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ClientService extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('client_service', function (Blueprint $table) {
        $table->integer('client_id')->unsigned();
        $table->integer('service_id')->unsigned();
        $table->foreign('client_id')->references('id')->on('clients')->onUpdate('cascade')->onDelete('cascade');
        $table->foreign('service_id')->references('id')->on('services')->onUpdate('cascade')->onDelete('cascade');
        $table->boolean('confirmed_by_stylist')->default(0);
        $table->date('Date');
        $table->boolean('Complited')->default(0);
        $table->boolean('Confirmed_complite')->default(0);
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::dropIfExists('client_service');
    }
}
