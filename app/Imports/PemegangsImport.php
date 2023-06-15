<?php

namespace App\Imports;

use Illuminate\Http\Request;
use App\Models\Pemegang;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;


class PemegangsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Pemegang([
            'kode'    => $row['1'],
            'surat'    => $row['2'],
            'tanggal'    => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['3']),
            'batas'    => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['4']),
            'barang_id'    => $row['5'],
            'karyawan_id'    => $row['6'],
        ]);
    }
}
