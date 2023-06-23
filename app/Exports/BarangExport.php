<?php

namespace App\Exports;

use App\Models\Barang;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class BarangExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Barang::select('kode_barang', 'nama_barang','register','merktype','harga')
        ->orderByRaw('kode_barang')
        // ->sum('harga')
        ->get();
    }
    public function headings(): array
    {
        return ["Kode Barang", "Nama Barang", "Register","Merk/Type","Harga"];
    }
}
