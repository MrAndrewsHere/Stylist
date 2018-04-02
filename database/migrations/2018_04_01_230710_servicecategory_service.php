<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ServicecategoryService extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('service_servicecategory', function (Blueprint $table) {
        $table->integer('servicecategory_id')->unsigned();
        $table->integer('service_id')->unsigned();
        $table->foreign('servicecategory_id')->references('id')->on('servicecategories')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('service_servicecategory');
    }
}
