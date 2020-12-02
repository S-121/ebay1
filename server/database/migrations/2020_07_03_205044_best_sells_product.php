<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BestSellsProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('best_sells_product', function (Blueprint $table) {
            $table->id();
            $table->string('epid')->nullable();
            $table->string('image')->nullable();
            $table->string('title')->nullable();
            $table->string('price')->nullable();
            $table->string('sales')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('best_sells_product');
    }
}
