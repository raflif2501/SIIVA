<?php

namespace App\Imports;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Barang;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class BarangsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $kode = Str::random(15);
        return new Barang([
            'kode'     => $kode,
            'kode_barang'    => $row['2'],
            'nama_barang'    => $row['3'],
            'register'    => $row['4'],
            'merktype'    => $row['5'],
            'bahan'    => $row['6'],
            'tahun'    => $row['7'],
            'harga'    => $row['8'],
            'asal'    => $row['9'],
            'ukuran'    => $row['10'],
            'pabrik'    => $row['11'],
            'rangka'    => $row['12'],
            'mesin'    => $row['13'],
            'nopol'    => $row['14'],
            'bpkb'    => $row['15'],
            // 'tanggal_perawatan'    => $row['16'],
            'keterangan'    => $row['17'],
            'kategori_id'    => $row['18'],
            'bidang_id'    => $row['19'],
        ]);
    }
}
