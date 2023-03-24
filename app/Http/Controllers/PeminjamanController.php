<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Barang;
use App\Models\Karyawan;
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
        $data1 = Karyawan::all();
        return view('peminjaman.create',compact('data','data1'));
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
            'barang_id' => 'required',
            'karyawan_id' => 'required',
            'tanggal_peminjaman' => 'required',
            'jangka_waktu' => 'required|numeric',
            'tujuan' => 'required',
        ],$pesan);
        $id = intval("0" . rand(1,9) . rand(0,9) . rand(0,9));
        if($request->tujuan != null)
        {
            Peminjaman::create([
                'id' => $id,
                'kode' => $request->kode,
                'barang_id' => $request->barang_id,
                'karyawan_id' => $request->karyawan_id,
                'tanggal_peminjaman' => $request->tanggal_peminjaman,
                'jangka_waktu' => $request->jangka_waktu,
                'tujuan' => $request->tujuan,
            ]);
        }else{
            Peminjaman::create([
                'id' => $id,
                'kode' => $request->kode,
                'barang_id' => $request->barang_id,
                'karyawan_id' => $request->karyawan_id,
                'tanggal_peminjaman' => $request->tanggal_peminjaman,
                'jangka_waktu' => $request->jangka_waktu,
                'tujuan' => $request->tujuan,
            ]);
        }
        Pengembalian::create([
            'id' => $id,
            'peminjaman_id' => $id,
            'status' => $request->status,
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
        $data1 = Barang::all();
        $data2 = Karyawan::all();
        $data = Peminjaman::find($id);
        return view('peminjaman.edit', compact('data','data1','data2'));
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
                'kode' => 'required',
                'barang_id' => 'required',
                'karyawan_id' => 'required',
                'nama_peminjam' => 'required',
                'tanggal_peminjaman' => 'required',
                'jangka_waktu' => 'required|numeric',
                'tujuan' => 'required',
            ],$pesan);
            $data = Peminjaman::find($id);
            // var_dump($request->all());
            // die;
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
        Peminjaman::find($id)->delete();
        Alert::success('Success', 'Data Berhasil Dihapus');
        return redirect()->route('peminjaman.index');
    }
}
