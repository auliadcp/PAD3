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
        Schema::create('pesanan_masuks', function (Blueprint $table) {
            $table->id();
            $table->integer('produk_id');
            $table->integer('status_id');
            $table->integer('pelanggan_id');
            $table->integer('jumlah');
            $table->dateTime('tanggal_masuk');
            $table->integer('total_pesanan');
            $table->string('resi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesanan_masuks');
    }
};
