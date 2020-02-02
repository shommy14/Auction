<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('description');
            $table->string('payment');
            $table->string('shipment');
            $table->boolean('sold')->default(0);
            $table->double('starter_price');
            $table->date('due_date');
            $table->integer('buyer_id')->nullable();
            $table->double('price_sold')->nullable();
            $table->unsignedInteger('catId')->nullable(false);
            $table->unsignedInteger('userId')->nullable(false);
            $table->foreign('catId')->references('id')->on('categories');
            $table->foreign('userId')->references('id')->on('users');
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
        Schema::dropIfExists('products');
    }
}
