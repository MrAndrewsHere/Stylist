<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePortfoliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('stylist_id')->unsigned()->index();
            $table->foreign('stylist_id')->references('id')->on('stylists')->onDelete('cascade');
            $table->text('client_purpose')->nullable();
            $table->text('orders')->nullable();
            $table->string('comment')->nullable();
            $table->string('picture_before')->nullable();
            $table->string('picture_after')->nullable();
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
        Schema::dropIfExists('portfolios');
    }
}
