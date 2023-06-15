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
            'kode'     => '0202',
            'kategori'     => 'Alat - alat Berat',
            'jangka_perawatan'     => '30',
            'jenis_perawatan'     => 'Pengecekan Berkala',
        ]);
        $kategori = Kategori::create([
            'kode'     => '0203',
            'kategori'     => 'Alat - alat Angkutan',
            'jangka_perawatan'     => '30',
            'jenis_perawatan'     => 'Service Rutin',
        ]);
        $kategori = Kategori::create([
            'kode'     => '0204',
            'kategori'     => 'Alat Bengkel dan Ukur',
            'jangka_perawatan'     => '30',
            'jenis_perawatan'     => 'Pengecekan Berkala',
        ]);
        $kategori = Kategori::create([
            'kode'     => '0205',
            'kategori'     => 'Alat Pertanian dan Peternakan',
            'jangka_perawatan'     => '30',
            'jenis_perawatan'     => 'Pengecekan Berkala',
        ]);
        $kategori = Kategori::create([
            'kode'     => '0206',
            'kategori'     => 'Alat - alat Kantor dan Rumah Tangga',
            'jangka_perawatan'     => '30',
            'jenis_perawatan'     => 'Pengecekan Berkala',
        ]);
        $kategori = Kategori::create([
            'kode'     => '0207',
            'kategori'     => 'Alat Studio dan Alat Komunikasi',
            'jangka_perawatan'     => '30',
            'jenis_perawatan'     => 'Pengecekan Berkala',
        ]);
        $kategori = Kategori::create([
            'kode'     => '0208',
            'kategori'     => 'Alat - alat Kedokteran',
            'jangka_perawatan'     => '30',
            'jenis_perawatan'     => 'Pengecekan Berkala',
        ]);
        $kategori = Kategori::create([
            'kode'     => '0209',
            'kategori'     => 'Alat Laboratorium',
            'jangka_perawatan'     => '30',
            'jenis_perawatan'     => 'Pengecekan Berkala',
        ]);
        $kategori = Kategori::create([
            'kode'     => '0210',
            'kategori'     => 'Alat Kemamanan',
            'jangka_perawatan'     => '30',
            'jenis_perawatan'     => 'Pengecekan Berkala',
        ]);
    }
}
