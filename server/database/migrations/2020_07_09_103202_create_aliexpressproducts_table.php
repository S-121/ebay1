<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAliexpressproductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aliexpressproducts', function (Blueprint $table) {            
            $table->id();
            $table->string('seller')->nullable();
            $table->string('image')->nullable();
            $table->string('title')->nullable();
            $table->string('shipping')->nullable();
            $table->string('votes')->nullable();
            $table->string('rating')->nullable();
            $table->string('sales')->nullable();
            $table->string('score')->nullable();
            $table->string('price')->nullable();
            $table->string('growth')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aliexpressproducts');
    }
}
