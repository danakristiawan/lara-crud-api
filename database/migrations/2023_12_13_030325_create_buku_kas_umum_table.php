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
        Schema::create('buku_kas_umum', function (Blueprint $table) {
            $table->id();
            $table->string('kode_satker');
            $table->string('nama_bank');
            $table->string('nomor_rekening');
            $table->string('tanggal');
            $table->string('bulan');
            $table->string('tahun');
            $table->string('tipe');
            $table->string('jenis');
            $table->string('kode');
            $table->string('debet');
            $table->string('kredit');
            $table->string('keterangan');
            $table->string('status')->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buku_kas_umum');
    }
};
