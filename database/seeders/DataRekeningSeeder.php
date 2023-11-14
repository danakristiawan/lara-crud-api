<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DataRekeningSeeder extends Seeder
{
    public function run(): void
    {
        \App\Models\DataRekening::create([
            'kode_satker' => '119312',
            'bank' => 'BNI',
            'nomor' => '0010554978',
            'tanggal' => '30-11-2023',
            'tipe' => 'K',
            'nominal' => '2000000',
            'uraian' => 'Transfer rekening bank lain',
            'status' => '0',
        ]);
        \App\Models\DataRekening::create([
            'kode_satker' => '411792',
            'bank' => 'BNI',
            'nomor' => '0010554979',
            'tanggal' => '12-11-2023',
            'tipe' => 'K',
            'nominal' => '2300000',
            'uraian' => 'Transfer rekening bank lain-lain',
            'status' => '0',
        ]);
    }
}
