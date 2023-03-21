<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Barang;
use App\Models\Bidang;
use App\Models\Kategori;
use App\Models\Karyawan;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $auth = auth()->user();
        $barang = Barang::count();
        $bidang = Bidang::count();
        $kategori = Kategori::count();
        $karyawan = Karyawan::count();
        return view('admin.index',compact('barang','bidang','kategori','karyawan'));
    }
}
