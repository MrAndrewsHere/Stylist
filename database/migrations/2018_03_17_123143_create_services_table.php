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

			$table->increments('id');
			$table->string('name')->nullable();
			$table->longText('description')->nullable();
			$table->longText('HowTo')->nullable();
			$table->longText('result')->nullable;
			$table->float('price')->nullable();
			$table->string('picture')->nullable();
			$table->string('banner')->nullable();
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
