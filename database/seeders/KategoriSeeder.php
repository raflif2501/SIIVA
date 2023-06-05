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
            'kategori'     => 'Kendaraan Roda 2',
            'jangka_perawatan'     => '30',
            'jenis_perawatan'     => 'Service Rutin',
        ]);
        $kategori = Kategori::create([
            'kode'     => 'RD2',
            'kategori'     => 'Kendaraan Roda 3',
            'jangka_perawatan'     => '30',
            'jenis_perawatan'     => 'Service Rutin',
        ]);
        $kategori = Kategori::create([
            'kode'     => 'MTR',
            'kategori'     => 'Kendaraan Roda 4',
            'jangka_perawatan'     => '30',
            'jenis_perawatan'     => 'Service Rutin',
        ]);
    }
}
