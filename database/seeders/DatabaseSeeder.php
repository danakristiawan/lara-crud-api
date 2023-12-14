<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\RefNotaSeeder;
use Database\Seeders\DataNotaSeeder;
use Database\Seeders\DataTestLogicSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\DataTransaksi::factory(77)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            // ReferensiBankSeeder::class,
            // DataRekeningSeeder::class,
            // UserSeeder::class,
            DataTestLogicSeeder::class,
        ]);
    }
}
