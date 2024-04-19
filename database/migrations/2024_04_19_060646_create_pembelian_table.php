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
        Schema::create('pembelians', function (Blueprint $table) {
            $table->id('id')->primary();
            $table->timestamps();
            $table->string('nomor_pembelian');
            $table->date('tanggal_pembelian');
            $table->string('kode_barang');
            $table->string('satuan');
            $table->float('qty');
            $table->float('harga');
            $table->float('diskon');
            $table->float('subtotal');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembelian');
    }
};
