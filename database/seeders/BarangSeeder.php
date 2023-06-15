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
            'keterangan'     => 'Baik',
            'tanggal_perawatan'     => '2023-06-01',
            'kategori_id'     => '2',
            'bidang_id'     => '1',
        ]);
        $barang = Barang::create([
            'kode'     => 'ap4ca17k4k3h1Ja',
            'kode_barang'     => '0203010302',
            'nama_barang'     => 'Mobil Penumpang',
            'register'     => '0001',
            'merktype'     => 'Toyota - Kijang Innova',
            'bahan'     => 'Campuran',
            'tahun'     => '2016',
            'harga'     => '211951000',
            'asal'     => 'Pembelian',
            'ukuran'     => '1998',
            'pabrik'     => '',
            'rangka'     => 'MHFJW8EM1G2308777',
            'mesin'     => '1TRA045118',
            'nopol'     => 'M 1350 VP',
            'bpkb'     => 'M-03851345',
            'keterangan'     => 'Baik',
            'tanggal_perawatan'     => '2023-06-01',
            'kategori_id'     => '2',
            'bidang_id'     => '1',
        ]);
        $barang = Barang::create([
            'kode'     => 'ap4ca17k4k3h1J4',
            'kode_barang'     => '0203010302',
            'nama_barang'     => 'Pickup',
            'register'     => '0009',
            'merktype'     => 'Isuzu - TBR 54',
            'bahan'     => 'Campuran',
            'tahun'     => '2001',
            'harga'     => '80000000',
            'asal'     => 'Pembelian',
            'ukuran'     => '2499',
            'pabrik'     => '',
            'rangka'     => 'MHCTBR54B1K098883',
            'mesin'     => 'E098883',
            'nopol'     => 'M 8139 VP',
            'bpkb'     => 'M-C 0234007J',
            'keterangan'     => 'Kurang Baik',
            'tanggal_perawatan'     => '2023-06-01',
            'kategori_id'     => '2',
            'bidang_id'     => '1',
        ]);
    }
}
