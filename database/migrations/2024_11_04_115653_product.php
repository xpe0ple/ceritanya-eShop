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
        Schema::create('product', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('sku')->unique(); // Unique SKU
            $table->string('nama_product'); // Product Name
            $table->string('tipe'); // Type of product
            $table->string('kategori'); // Category of product
            $table->bigInteger('harga'); // Price
            $table->float('diskon')->nullable(); // Discount
            $table->integer('quantity'); // Quantity available
            $table->integer('foto'); // Quantity available
            $table->boolean('is_active')->default(1); // Active status
            $table->timestamps(); // Created and updated timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product'); // Drop the products table
    }
};
