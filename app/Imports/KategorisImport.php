<?php

namespace App\Imports;

use Illuminate\Http\Request;
use App\Models\Kategori;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithStartRow;

class KategorisImport implements ToModel, WithStartRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Kategori([
            'kode'     => $row['1'],
            'kategori'    => $row['2'],
            'jangka_perawatan'    => $row['3'],
            'jenis_perawatan'    => $row['4'],
        ]);
    }
    public function startRow(): int
    {
        return 2;
    }
}
