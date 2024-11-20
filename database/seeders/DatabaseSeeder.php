<?php

namespace Database\Seeders;
use App\Models\Pengguna;
use App\Models\Produk;
// use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Pengguna::factory(count:10)->create();
        Produk::factory(count:10)->create();

    }
}
