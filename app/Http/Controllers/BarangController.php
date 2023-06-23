<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Barang;
use App\Models\Kategori;
use App\Models\Bidang;
use App\Models\Pemegang;
use RealRashid\SweetAlert\Facades\Alert;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use PDF;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('permission:list barang', ['only' => ['index','show']]);
        $this->middleware('permission:create barang', ['only' => ['create','store']]);
        $this->middleware('permission:edit barang', ['only' => ['edit','update']]);
        $this->middleware('permission:delete barang', ['only' => ['destroy']]);
    }
    public function index()
    {
        $auth = auth()->user();
        $data = Barang::all();
        return view('barang.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kode = Str::random(15);
        $data1 = Kategori::all();
        $data2 = Bidang::all();
        // $qrcode = QrCode::size(100)->generate($kode);
        // var_dump($qrcode);
        return view('barang.create',compact('kode','data1','data2'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // var_dump($request->all());
        // die;
        $pesan = [
            'required' => ':attribute wajib diisi !',
            'min' => ':attribute harus diisi minimal :min karakter !',
            'max' => ':attribute harus diisi maksimal :max karakter !',
            'numeric' => ':attribute harus diisi angka !',
            ];
            $this->validate($request,[
                'kode' => 'required',
                'kode_barang' => 'required',
                'nama_barang' => 'required',
                'merktype' => 'required',
                'harga' => 'numeric',
                'kategori_id' => 'required',
                'bidang_id' => 'required',
            ],$pesan);
            $r = Barang::select("register")
                ->where('kode_barang',$request->kode_barang)
                ->where('register',$request->register)
                ->get();
            $a = $r->implode('register');
            // dd($a);
            $id = intval("0" . rand(1,9) . rand(0,9) . rand(0,9));
            if($request->register != $a)
            {
                Barang::create([
                    'id' => $id,
                    'kode' => $request->kode,
                    'kode_barang' => $request->kode_barang,
                    'nama_barang' => $request->nama_barang,
                    'register' => $request->register,
                    'merktype' => $request->merktype,
                    'bahan' => $request->bahan,
                    'tahun' => $request->tahun,
                    'harga' => $request->harga,
                    'asal' => $request->asal,
                    'ukuran' => $request->ukuran,
                    'pabrik' => $request->pabrik,
                    'rangka' => $request->rangka,
                    'mesin' => $request->mesin,
                    'nopol' => $request->nopol,
                    'bpkb' => $request->bpkb,
                    'tanggal_perawatan' => $request->tanggal_perawatan,
                    'keterangan' => $request->keterangan,
                    'kategori_id' => $request->kategori_id,
                    'bidang_id' => $request->bidang_id,
                ]);
            }else{
                Alert::error('Maaf', 'Nomor Register sudah digunakan');
                return redirect()->back();
            }
            Alert::success('Success', 'Data Berhasil Ditambahkan');
            return redirect()->route('aset.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tahun = Carbon::now()->format('Y');

        $data = Barang::select("*")
        ->where('id',$id)
        ->get();

        $d = Barang::select("id")
        ->where('id',$id)
        ->get();

        $pemegang = Pemegang::select("*")
            ->whereIn('barang_id',$d)
            ->whereYear('tanggal',$tahun)
            ->orderByRaw('tanggal DESC')
            ->first();
        if($pemegang != null){
            $nama = $pemegang->karyawan->nama;
        } else {
            $nama = null;
        }
        // dd($nama);
        return view ('barang.stiker1', compact('data','nama'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Barang::find($id);
        $data1 = Kategori::all();
        $data2 = Bidang::all();
        return view('barang.edit', compact('data','data1','data2'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // var_dump($request->all());
        $pesan = [
            'required' => ':attribute wajib diisi !',
            'min' => ':attribute harus diisi minimal :min karakter !',
            'max' => ':attribute harus diisi maksimal :max karakter !',
            'numeric' => ':attribute harus diisi angka !',
            ];
            $this->validate($request,[
                'kode' => 'required',
                'kode_barang' => 'required',
                'nama_barang' => 'required',
                'merktype' => 'required',
                'harga' => 'numeric',
                'kategori_id' => 'required',
                'bidang_id' => 'required',
            ],$pesan);
            $r = Barang::select("register")
                ->where('kode_barang',$request->kode_barang)
                ->where('register',$request->register)
                ->get();
            $a = $r->implode('register');
            $i = Barang::select('register')
                ->where('id',$id)
                ->get();
            $d = $i->implode('register');
            // dd($d);
            if($request->register != $a)
            {
                $data = Barang::find($id);
                $data->update($request->all());
            } elseif($request->register == $d) {
                $data = Barang::find($id);
                $data->update($request->all());
            } else {
                Alert::error('Maaf', 'Nomor Register sudah digunakan');
                return redirect()->back();
            }
            Alert::success('Success', 'Data Berhasil Dirubah');
            return redirect()->route('aset.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Barang::find($id)->delete();
        Alert::success('Success', 'Data Berhasil Dihapus');
        return redirect()->route('aset.index');
    }
    public function stiker()
    {
    	$data = Barang::all();
    	$id = Barang::select("id")->get();
        $pemegang = Pemegang::select("*")
            ->where('barang_id', [$id])->get();
        // dd($pemegang);
        // if($pemegang != null){
        //     $nama = $pemegang->karyawan->nama;
        // } else {
        //     $nama = null;
        // }
        return view ('barang.stiker', compact('data','pemegang'));
    }

    public function baru()
    {
        $today = Carbon::now()->isoFormat('dddd, D MMMM Y');
        $tahun = Carbon::now()->format('Y');
        $bulan = Carbon::now()->format('m');
        $tanggal = Carbon::now()->format('d');

        $data = Barang::select("*")
            ->whereYear('created_at',$tahun)
            ->whereMonth('created_at', $bulan)
            ->whereDay('created_at', '=', $tanggal)
            ->get();
        // var_dump($data);die;
        return view ('barang.baru', compact('data'));
    }
    public function stikerbaru()
    {
        $today = Carbon::now()->isoFormat('dddd, D MMMM Y');
        $tahun = Carbon::now()->format('Y');
        $bulan = Carbon::now()->format('m');
        $tanggal = Carbon::now()->format('d');

    	$data = Pemegang::select("*")
            ->whereYear('created_at',$tahun)
            ->whereMonth('created_at', $bulan)
            ->whereDay('created_at', '=', $tanggal)
            ->get();
        return view ('barang.stikerbaru', compact('data'));
    }

    public function reportkategori()
    {
    	$data = Kategori::all();
        $satu = Barang::select("*")
            ->where('kategori_id','1')
            ->count();
        $dua = Barang::select("*")
            ->where('kategori_id','2')
            ->count();
        $tiga = Barang::select("*")
            ->where('kategori_id','3')
            ->count();
        $empat = Barang::select("*")
            ->where('kategori_id','4')
            ->count();
        $lima = Barang::select("*")
            ->where('kategori_id','5')
            ->count();
        $enam = Barang::select("*")
            ->where('kategori_id','6')
            ->count();
        $tujuh = Barang::select("*")
            ->where('kategori_id','7')
            ->count();
        $delapan = Barang::select("*")
            ->where('kategori_id','8')
            ->count();
        $sembilan = Barang::select("*")
            ->where('kategori_id','9')
            ->count();

        $hsatu = Barang::where('kategori_id','1')->sum('harga');
        $hdua = Barang::where('kategori_id','2')->sum('harga');
        $htiga = Barang::where('kategori_id','3')->sum('harga');
        $hempat = Barang::where('kategori_id','4')->sum('harga');
        $hlima = Barang::where('kategori_id','5')->sum('harga');
        $henam = Barang::where('kategori_id','6')->sum('harga');
        $htujuh = Barang::where('kategori_id','7')->sum('harga');
        $hdelapan = Barang::where('kategori_id','8')->sum('harga');
        $hsembilan = Barang::where('kategori_id','9')->sum('harga');
        // dd($hsatu);
        return view ('barang.reportkategori', compact('data','satu','dua','tiga','empat','lima','enam','tujuh','delapan','sembilan','hsatu','hdua','htiga','hempat','hlima','henam','htujuh','hdelapan','hsembilan'));
    }

    public function reportaset()
    {
        $data = Barang::select("kode_barang")
            ->distinct()
            ->get();
        $data1 = Barang::select('*')
            ->get();
        // dd($data1);
        return view ('barang.reportaset', compact('data','data1'));
    }
    public function reportaset_()
    {
        $data = Barang::select("kode_barang")
            ->distinct()
            ->get();
        // dd($data);
        $kode = null;
        // $hsatu = Barang::where('kode_barang','1')->sum('harga');
        // dd($hsatu);
        return view ('barang.reportaset_', compact('data','kode'));
    }

    public function report($kode_barang)
    {
        $kode = $kode_barang;
        $data = Barang::select("kode_barang")
            ->distinct()
            ->get();
        $data1 = Barang::select("*")
            ->where('kode_barang', $kode_barang)
            ->distinct()
            ->get();
        $jumlah = Barang::select("*")
            ->where('kode_barang', $kode_barang)
            ->count();
        // dd($kode);
        $harga = Barang::where('kode_barang',$kode_barang)->sum('harga');
        // dd($hsatu);
        return view ('barang.reportaset_', compact('data','data1','harga','jumlah','kode'));
    }

    public function reportasetpdf()
    {
    	$data = Barang::select("kode_barang")
            ->distinct()
            ->get();
        $data1 = Barang::select('*')
            ->get();
        $today = Carbon::now()->isoFormat('D MMMM Y');
        // var_dump($data);
        // die;
        $pdf = PDF::loadView('barang.reportaset_pdf', compact('data','data1','today'));
        return $pdf->setPaper('a4', 'potrait')->stream();
    }

    public function reportkategoripdf()
    {
    	$data = Kategori::all();
        $satu = Barang::select("*")
            ->where('kategori_id','1')
            ->count();
        $dua = Barang::select("*")
            ->where('kategori_id','2')
            ->count();
        $tiga = Barang::select("*")
            ->where('kategori_id','3')
            ->count();
        $empat = Barang::select("*")
            ->where('kategori_id','4')
            ->count();
        $lima = Barang::select("*")
            ->where('kategori_id','5')
            ->count();
        $enam = Barang::select("*")
            ->where('kategori_id','6')
            ->count();
        $tujuh = Barang::select("*")
            ->where('kategori_id','7')
            ->count();
        $delapan = Barang::select("*")
            ->where('kategori_id','8')
            ->count();
        $sembilan = Barang::select("*")
            ->where('kategori_id','9')
            ->count();

        $hsatu = Barang::where('kategori_id','1')->sum('harga');
        $hdua = Barang::where('kategori_id','2')->sum('harga');
        $htiga = Barang::where('kategori_id','3')->sum('harga');
        $hempat = Barang::where('kategori_id','4')->sum('harga');
        $hlima = Barang::where('kategori_id','5')->sum('harga');
        $henam = Barang::where('kategori_id','6')->sum('harga');
        $htujuh = Barang::where('kategori_id','7')->sum('harga');
        $hdelapan = Barang::where('kategori_id','8')->sum('harga');
        $hsembilan = Barang::where('kategori_id','9')->sum('harga');

        $today = Carbon::now()->isoFormat('D MMMM Y');
        // var_dump($data);
        // die;
        $pdf = PDF::loadView('barang.reportkategori_pdf', compact('today','data','satu','dua','tiga','empat','lima','enam','tujuh','delapan','sembilan','hsatu','hdua','htiga','hempat','hlima','henam','htujuh','hdelapan','hsembilan'));
        return $pdf->setPaper('a4', 'potrait')->stream();
    }

}
