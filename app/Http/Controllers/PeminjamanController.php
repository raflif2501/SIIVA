<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Barang;
use App\Models\Peminjaman;
use App\Models\Pengembalian;
use RealRashid\SweetAlert\Facades\Alert;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\Storage;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:admin|B-SDA|B-BM|B-PBP|B-AMdP|B-BJK|B-TR');
    }
    public function index()
    {
        $auth = auth()->user();
        $data = Peminjaman::all();
        return view('peminjaman.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Barang::all();
        return view('peminjaman.create',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pesan = [
        'required' => ':attribute wajib diisi !',
        'min' => ':attribute harus diisi minimal :min karakter !',
        'max' => ':attribute harus diisi maksimal :max karakter !',
        'numeric' => ':attribute harus diisi angka !',
        ];
        $this->validate($request,[
            'nama_peminjam' => 'required',
            'nama_barang' => 'required',
            'tanggal_peminjaman' => 'required',
            'tujuan' => 'required',
        ],$pesan);
        $id = intval("0" . rand(1,9) . rand(0,9) . rand(0,9));
        if($request->keterangan != null)
        {
            Peminjaman::create([
                'id' => $id,
                'nama_peminjam' => $request->nama_peminjam,
                'nama_barang' => $request->nama_barang,
                'tanggal_peminjaman' => $request->tanggal_peminjaman,
                'tujuan' => $request->tujuan,
            ]);
        }else{
            Peminjaman::create([
                'id' => $id,
                'nama_peminjam' => $request->nama_peminjam,
                'nama_barang' => $request->nama_barang,
                'tanggal_peminjaman' => $request->tanggal_peminjaman,
                'tujuan' => $request->tujuan,
            ]);
        }
        Pengembalian::create([
            'id' => $id,
            'peminjaman_id' => $id,
            'status' => $request->status,
            'tanggal_pengembalian' => '',
        ]);
        // dd($request);
        Alert::success('Success', 'Data Berhasil Ditambahkan');
        return redirect()->route('peminjaman.index');
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
        $data = Peminjaman::find($id);
        return view('peminjaman.edit', compact('data'));
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
        $pesan = [
            'required' => ':attribute wajib diisi !',
            'min' => ':attribute harus diisi minimal :min karakter !',
            'max' => ':attribute harus diisi maksimal :max karakter !',
            'numeric' => ':attribute harus diisi angka !',
            ];
            $this->validate($request,[
            'nama_peminjam' => 'required',
            'nama_barang' => 'required',
            'tanggal_peminjaman' => 'required',
            'tujuan' => 'required',
            ],$pesan);
            $data = Peminjaman::find($id);
            $data->update($request->all());
            Alert::success('Success', 'Data Berhasil Dirubah');
            return redirect()->route('peminjaman.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Peminjaman::find($id);
        $data1 = Pengembalian::where('id',$id)->first();
        // var_dump($data2);
        // die;
        if ($data1 != null) {
            $data1->delete();
            if ($data != null) {
                $data->delete();
                Alert::success('Success', 'Data Berhasil Dihapus');
                return back();
            }
        }
    }
}
