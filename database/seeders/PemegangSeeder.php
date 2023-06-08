<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Pemegang;

class PemegangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $karyawan = Pemegang::create([
            'kode'     => '12345678',
            'surat'     => '200201252023121002',
            'tanggal'     => '2021-01-01',
            'batas'     => '2021-12-31',
            'barang_id'     => '1',
            'karyawan_id'     => '1',
        ]);
        $karyawan = Pemegang::create([
            'kode'     => '12345677',
            'surat'     => '200201252023121002',
            'tanggal'     => '2022-01-01',
            'batas'     => '2022-12-31',
            'barang_id'     => '2',
            'karyawan_id'     => '1',
        ]);
        $karyawan = Pemegang::create([
            'kode'     => '12345676',
            'surat'     => '200201252023121002',
            'tanggal'     => '2023-01-01',
            'batas'     => '2023-12-31',
            'barang_id'     => '3',
            'karyawan_id'     => '1',
        ]);
    }
}
