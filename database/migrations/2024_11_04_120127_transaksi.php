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
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('nama_cust'); // Customer name
            $table->string('code_transaksi'); // Transaction code
            $table->string('sku_transaksi'); // SKU of the transaction
            $table->integer('total_qty'); // Total quantity (change to integer for better data handling)
            $table->decimal('total_harga', 10, 2); // Total price with decimal points
            $table->string('alamat'); // Address
            $table->string('no_tlp'); // Phone number
            $table->string('ekspedisi'); // Expedition service
            $table->timestamps(); // Created and updated timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi'); // Drop the transaksi table
    }
};
