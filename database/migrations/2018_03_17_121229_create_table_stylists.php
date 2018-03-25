<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableStylists extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::create('stylists', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('user_id')->unsigned()->index()->nullable;
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
			$table->integer('category_id')->unsigned()->index();
			$table->foreign('category_id')->references('id')->on('stylistcategories');
			$table->string('experience')->nullable;
			$table->string('education')->nullable;
			$table->string('about')->nullable;
			$table->string('rating')->nullable;
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
        Schema::dropIfExists('stylists');
    }
}
