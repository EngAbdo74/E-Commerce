<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->id();
            // $table->integer('order_id')->unsigned();
            // $table->foreign('order_id')->references('id')->on('orders');
            // $table->integer('product_color_size_id')->unsigned();
            // $table->foreign('product_color_size_id')->references('id')->on('product_color_size');

            $table->foreignId('order_id')->constrained('orders');
            $table->foreignId('product_color_size_id')->constrained('product_color_size');

            $table->integer('quantity');
            $table->decimal('price', 10, 2)->nullable();
            $table->decimal('discount', 10, 2)->nullable();
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
        Schema::dropIfExists('order_details');
    }
};
