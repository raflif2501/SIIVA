<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Barang;
use App\Models\Kategori;
use App\Models\Bidang;
use RealRashid\SweetAlert\Facades\Alert;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\Storage;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:admin|sekdis|B-SDA|B-BM|B-PBP|B-AMdP|B-BJK|B-TR');
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
            // var_dump($request->all());
            // $image = $request->file('kode_barang');
            // $name = time().'.'.$image->getClientOriginalExtension();
            // $image->move(public_path('image'),$name);
            $id = intval("0" . rand(1,9) . rand(0,9) . rand(0,9));
            if($request->nama_barang != null)
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
                    'keterangan' => $request->keterangan,
                    'kategori_id' => $request->kategori_id,
                    'bidang_id' => $request->bidang_id,
                ]);
            }else{
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
                    'keterangan' => $request->keterangan,
                    'kategori_id' => $request->kategori_id,
                    'bidang_id' => $request->bidang_id,
                ]);
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
        //
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
            $data = Barang::find($id);
            $data->update($request->all());
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
}
