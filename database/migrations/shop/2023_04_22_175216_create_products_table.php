<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('stock_status_id')->unsigned();
            $table->bigInteger('shipment_status_id')->unsigned();
            $table->bigInteger('manufacturer_id')->unsigned();
            $table->decimal('price');
            $table->integer('quantity');
            $table->decimal('weight');
            $table->decimal('height');
            $table->decimal('length');
            $table->decimal('width');
            $table->integer('viewed');
            $table->string('model');
            $table->string('sku');
            $table->string('upc');
            $table->string('ean');
            $table->string('jan');
            $table->string('isbn');
            $table->string('mpn');
            $table->string('location');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
