<?php

namespace App\Imports;

use Illuminate\Http\Request;
use App\Models\Bidang;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
class BidangsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Bidang([
            'kode'     => $row['1'],
            'nama_bidang'    => $row['2'],
            'kepala_bidang'    => $row['3'],
            'ruang'    => $row['4'],
        ]);
    }
}
