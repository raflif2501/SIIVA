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
            'kode'     => 'ap4ca17k4k3h1aH',
            'kode_barang'     => '0203010501',
            'nama_barang'     => 'Sepeda Motor',
            'register'     => '0001',
            'merktype'     => 'Yamaha - UE11 Cast Wheel',
            'bahan'     => 'Campuran',
            'tahun'     => '2016',
            'harga'     => '16800000',
            'asal'     => 'Pembelian',
            'ukuran'     => '113',
            'pabrik'     => '',
            'rangka'     => 'MH3UE1120GJ085872',
            'mesin'     => 'E3R5E-0088678',
            'nopol'     => 'M 2201 VP',
            'bpkb'     => 'M-04804272',
            'keterangan'     => 'baik',
            'kategori_id'     => '1',
            'bidang_id'     => '1',
        ]);
    }
}
