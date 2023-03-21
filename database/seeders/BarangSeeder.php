<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Barang;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barang = Barang::create([
            'kode_barang'     => 'ap4ca17k4k3h1aH',
            'nama_barang'     => 'Komputer',
            'merktype'     => 'DELL',
            'status'     => 'Aset Kantor',
            'kondisi'     => 'Bagus',
            'tahun'     => '2022-12-12',
            'sumber'     => 'APBD',
            'kategori_id'     => '1',
            'bidang_id'     => '1',
        ]);
    }
}
