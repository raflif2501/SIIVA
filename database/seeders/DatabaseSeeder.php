<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(UserSeeder::class);
        $this->call(BidangSeeder::class);
        $this->call(KategoriSeeder::class);
        $this->call(BarangSeeder::class);
        $this->call(KaryawanSeeder::class);
        $this->call(PemegangSeeder::class);
        $this->call(PermissionSeeder::class);
    }
}
