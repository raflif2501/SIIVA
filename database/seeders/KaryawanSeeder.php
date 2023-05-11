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
            'nip'     => '200201252023121002',
            'nama'     => 'Rafli Firdaus Falaka',
            'jk'     => 'Laki - laki',
            'alamat'     => 'Jl. KH. Abdullah Sajjad Guluk - Guluk',
            'status'     => 'PNS',
            'jabatan'     => 'Staff',
            'pangkat'     => 'Penata',
            'bidang_id'     => '1',
        ]);

        $karyawan = Karyawan::create([
            'nik'     => '3529092501020003',
            'nip'     => '196802251994031007',
            'nama'     => 'Ir. ERI SUSANTO, M. Si',
            'jk'     => 'Laki - laki',
            'alamat'     => 'Jl. Dr. Soetomo No. 03 Sumenep',
            'status'     => 'PNS',
            'jabatan'     => 'Kepala Dinas Pekerjaan Umum dan Tata Ruang Kabupaten Sumenep',
            'pangkat'     => 'Pembina Utama Muda',
            'bidang_id'     => '1',
        ]);
    }
}
