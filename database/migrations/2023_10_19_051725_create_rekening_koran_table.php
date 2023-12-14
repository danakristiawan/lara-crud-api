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
        Schema::create('rekening_koran', function (Blueprint $table) {
            $table->id();
            $table->string('kode_satker');
            $table->string('nomor_rekening');
            $table->string('nama_bank');
            $table->string('tanggal');
            $table->string('bulan');
            $table->string('tahun');
            $table->string('tipe');
            $table->string('nominal');
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
        Schema::dropIfExists('rekening_koran');
    }
};
