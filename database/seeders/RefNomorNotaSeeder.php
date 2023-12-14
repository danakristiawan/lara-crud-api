<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RefNomorNotaSeeder extends Seeder
{
    public function run(): void
    {
        \App\Models\RefNomorNota::create([
            'kode_satker' => '411792',
            'nomor' => '00001',
        ]);
    }
}
