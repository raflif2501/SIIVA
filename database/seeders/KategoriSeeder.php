<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Kategori;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kategori = Kategori::create([
            'kode'     => 'SPDMTR',
            'kategori'     => 'Sepeda Motor',
            'jangka_perawatan'     => '60',
            'tanggal_perawatan'     => '2023-12-12',
        ]);
    }
}
