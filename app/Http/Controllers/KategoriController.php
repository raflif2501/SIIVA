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

class KategoriController extends Controller
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
        $data = Kategori::all();
        return view('kategori.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kategori.create');
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
                'kategori' => 'required',
            ],$pesan);
            $id = intval("0" . rand(1,9) . rand(0,9) . rand(0,9));
            if($request->kode != null)
            {
                Kategori::create([
                    'id' => $id,
                    'kode' => $request->kode,
                    'kategori' => $request->kategori,
                    'jangka_perawatan' => $request->jangka_perawatan,
                    'tanggal_perawatan' => $request->tanggal_perawatan,
                ]);
            }else{
                Kategori::create([
                    'id' => $id,
                    'kode' => $request->kode,
                    'kategori' => $request->kategori,
                    'jangka_perawatan' => $request->jangka_perawatan,
                    'tanggal_perawatan' => $request->tanggal_perawatan,
                ]);
            }
            Alert::success('Success', 'Data Berhasil Ditambahkan');
            return redirect()->route('kategori.index');
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
        $data = Kategori::find($id);
        return view('kategori.edit', compact('data'));
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
                'kategori' => 'required',
            ],$pesan);
            $data = Kategori::find($id);
            $data->update($request->all());
            Alert::success('Success', 'Data Berhasil Dirubah');
            return redirect()->route('kategori.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Kategori::find($id)->delete();
        Alert::success('Success', 'Data Berhasil Dihapus');
        return redirect()->route('kategori.index');
    }
}
