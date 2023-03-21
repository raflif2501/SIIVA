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
            'kepala_bidang'     => 'Ahmad Zairosi., ST., MT',
            'ruang'     => 'BM-1',
        ]);
    }
}
