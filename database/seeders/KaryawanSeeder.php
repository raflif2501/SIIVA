<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Karyawan;

class KaryawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $karyawan = Karyawan::create([
            'nik'     => '3529092501020003',
            'nama'     => 'Rafli Firdaus Falaka',
            'jk'     => 'Laki - laki',
            'alamat'     => 'Jl. KH. Abdullah Sajjad Guluk - Guluk',
            'status'     => 'PNS',
            'jabatan'     => 'Staff',
            'bidang_id'     => '1',
        ]);
    }
}
