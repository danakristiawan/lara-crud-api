<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        \App\Models\User::create([
            'nama' => 'Cepot',
            'nip' => '123456789012345678',
            'password' => '123',
            'kode_satker' => '411792',
            'role' => 'admin',
        ]);
    }
}
