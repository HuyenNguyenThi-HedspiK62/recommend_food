<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMeansFoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('means_foods', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('mean_id')->unsigned();
            $table->integer('food_id')->unsigned();
            // $table->foreign('mean_id')->references('id')->on('means')->onDelete('cascade');
            // $table->foreign('food_id')->references('id')->on('foods')->onDelete('cascade');
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
        Schema::dropIfExists('means_foods');
    }
}
