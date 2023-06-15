<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Bidang;

class BidangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bidang = Bidang::create([
            'kode'     => 'BM',
            'nama_bidang'     => 'Bina Marga',
            'kepala_bidang'     => 'AGUS ADI HIDAYAT, STP., MT',
            'ruang'     => 'BM-1',
        ]);
        $bidang = Bidang::create([
            'kode'     => 'SDA',
            'nama_bidang'     => 'Sumber Daya Air',
            'kepala_bidang'     => 'HENDRI HARTONNO, ST., MT',
            'ruang'     => 'SDA-1',
        ]);
        $bidang = Bidang::create([
            'kode'     => 'PBG',
            'nama_bidang'     => 'Penataan Bangunan Gedung',
            'kepala_bidang'     => 'BENNY IRAWAN, ST., MT',
            'ruang'     => 'PBG-1',
        ]);
        $bidang = Bidang::create([
            'kode'     => 'AM-PLP',
            'nama_bidang'     => 'Air Minum dan Penyehatan Lingkungan Permukiman',
            'kepala_bidang'     => 'DEDI FALAHUDDIN, ST., MT',
            'ruang'     => 'AM-PLP-1',
        ]);
        $bidang = Bidang::create([
            'kode'     => 'BJK',
            'nama_bidang'     => 'Bina Jasa Konstruksi',
            'kepala_bidang'     => 'SALAMET SUPRIYADI, ST., M.Si',
            'ruang'     => 'BJK-1',
        ]);
        $bidang = Bidang::create([
            'kode'     => 'TR',
            'nama_bidang'     => 'Tata Ruang',
            'kepala_bidang'     => 'HARIYANTO EFFENDI, ST., MT',
            'ruang'     => 'TR-1',
        ]);
    }
}
