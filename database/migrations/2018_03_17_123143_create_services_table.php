<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('services', function (Blueprint $table) {

			$table->increments('service_id');
			$table->integer('stylist_id')->unsigned()->index();
			$table->integer('category_id')->unsigned()->index();
			$table->foreign('category_id')->references('category_id')->on('servicecategory');
			$table->string('describe')->nullable;
			$table->float('price')->nullable;
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
		Schema::dropIfExists('services');
	}
}
