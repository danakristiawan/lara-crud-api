<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DataTransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\DataTransaksi::create([
            'kode_satker' => '411792',
            'bulan' => '01',
            'nominal' => '234000',
        ]);
        \App\Models\DataTransaksi::create([
            'kode_satker' => '411792',
            'bulan' => '01',
            'nominal' => '234000',
        ]);
        \App\Models\DataTransaksi::create([
            'kode_satker' => '411792',
            'bulan' => '02',
            'nominal' => '234000',
        ]);
        \App\Models\DataTransaksi::create([
            'kode_satker' => '411792',
            'bulan' => '03',
            'nominal' => '234000',
        ]);
        \App\Models\DataTransaksi::create([
            'kode_satker' => '411792',
            'bulan' => '04',
            'nominal' => '234000',
        ]);
    }
}
