<?php

namespace App\Exports;

use App\Models\Kategori;
use App\Models\Barang;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class KategoriExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Barang::join('kategoris', 'kategori_id', '=', 'kategoris.id')
        ->select('kategoris.kode', 'kategoris.kategori','register','harga')
        ->orderByRaw('kategori_id')
        ->get();
    }
    public function headings(): array
    {
        return ["Kode", "Kategori", "Jumlah","Harga"];
    }
}
