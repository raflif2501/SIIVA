<?php

namespace App\Imports;

use Illuminate\Http\Request;
use App\Models\Karyawan;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithStartRow;

class KaryawansImport implements ToModel, WithStartRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Karyawan([
            'nik'     => $row['1'],
            'nip'    => $row['2'],
            'nama'    => $row['3'],
            'jk'    => $row['4'],
            'alamat'    => $row['5'],
            'status'    => $row['6'],
            'jabatan'    => $row['7'],
            'pangkat'    => $row['8'],
            'bidang_id'    => $row['9'],
        ]);
    }
    public function startRow(): int
    {
        return 2;
    }
}
