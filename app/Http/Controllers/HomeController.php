<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Barang;
use App\Models\Bidang;
use App\Models\Kategori;
use App\Models\Karyawan;
use App\Models\Pemegang;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

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

        $today = Carbon::now()->isoFormat('dddd, D MMMM Y');
        $tahun = Carbon::now()->format('Y');
        $bulan = Carbon::now()->format('m');
        $tanggal = Carbon::now()->format('d');

        $motor = DB::table('barangs')
            ->whereNotNull('nopol')
            ->whereYear('tanggal_perawatan',$tahun)
            ->whereMonth('tanggal_perawatan', $bulan)
            ->whereDay('tanggal_perawatan', '<=', $tanggal)
            ->get();

        $pajak = DB::table('barangs')
            ->whereNotNull('nopol')
            ->whereYear('tanggal_perawatan',$tahun)
            ->whereMonth('tanggal_perawatan', $bulan)
            ->whereDay('tanggal_perawatan', '<=', $tanggal)
            ->count();

        $kywn = DB::table('karyawans')
            ->whereYear('created_at',$tahun)
            ->whereMonth('created_at', $bulan)
            ->whereDay('created_at', '=', $tanggal)
            ->count();

        $mts = DB::table('karyawans')
            ->whereYear('updated_at',$tahun)
            ->whereMonth('updated_at', $bulan)
            ->whereDay('updated_at', '=', $tanggal)
            ->count();

        $akun = DB::table('users')
            ->whereYear('updated_at',$tahun)
            ->whereMonth('updated_at', $bulan)
            ->whereDay('updated_at', '=', $tanggal)
            ->count();

        $aset = DB::table('barangs')
            ->whereYear('created_at',$tahun)
            ->whereMonth('created_at', $bulan)
            ->whereDay('created_at', '=', $tanggal)
            ->count();

        $pemegang = DB::table('pemegangs')
            ->whereYear('created_at',$tahun)
            ->whereMonth('created_at', $bulan)
            ->whereDay('created_at', '=', $tanggal)
            ->count();

        $p = Pemegang::select("barang_id")
            ->whereYear('updated_at',$tahun)
            ->whereMonth('updated_at', $bulan)
            ->whereDay('updated_at', '=', $tanggal)
            ->get();

        $pengganti = DB::table('pemegangs')
            ->whereYear('created_at',$tahun)
            ->whereMonth('created_at', $bulan)
            ->whereDay('created_at', '=', $tanggal)
            ->whereIn('barang_id',$p)
            ->count();
        // dd($pengganti);

        return view('admin.index',compact('barang','bidang','kategori','karyawan','today','motor','pajak','kywn','mts','akun','aset','pemegang','pengganti'));
    }
}
