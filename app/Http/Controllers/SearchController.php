<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Bidang;
use App\Models\Kategori;
use RealRashid\SweetAlert\Facades\Alert;

class SearchController extends Controller
{
    public function cari(Request $request)
    {
    $data = Barang::where('kode',$request->cari) ->get();
    Alert::success('Success', 'Data Ditemukan');
    return view('search',compact('data'));
    }
}
