<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class StylistCategory extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('StylistCategory', function (Blueprint $table) {
			$table->increments('category_id');
			$table->string('name')->defaul('Начинающий стилист');
			$table->string('describe')->default('Описание категории');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('StylistCategory');
	}
}
