<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Barang;
use App\Models\Karyawan;
use App\Models\Bidang;
use RealRashid\SweetAlert\Facades\Alert;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\Storage;

class KaryawanController extends Controller
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
        $data = Karyawan::all();
        return view('karyawan.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data1 = Bidang::all();
        return view('karyawan.create',compact('data1'));
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
                'nik' => 'required|numeric|min:16|max:16',
                'nama' => 'required',
                'jk' => 'required',
                'alamat' => 'required',
                'status' => 'required',
                'jabatan' => 'required',
                'bidang_id' => 'required',
            ],$pesan);
            $id = intval("0" . rand(1,9) . rand(0,9) . rand(0,9));
            if($request->nik != null)
            {
                Karyawan::create([
                    'id' => $id,
                    'nik' => $request->nik,
                    'nama' => $request->nama,
                    'jk' => $request->jk,
                    'alamat' => $request->alamat,
                    'status' => $request->status,
                    'jabatan' => $request->jabatan,
                    'bidang_id' => $request->bidang_id,
                ]);
            }else{
                Karyawan::create([
                    'id' => $id,
                    'nik' => $request->nik,
                    'nama' => $request->nama,
                    'jk' => $request->jk,
                    'alamat' => $request->alamat,
                    'status' => $request->status,
                    'jabatan' => $request->jabatan,
                    'bidang_id' => $request->bidang_id,
                ]);
            }
            Alert::success('Success', 'Data Berhasil Ditambahkan');
            return redirect()->route('karyawan.index');
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
        $data = Karyawan::find($id);
        $data1 = Bidang::all();
        return view('karyawan.edit', compact('data','data1'));
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
                'nik' => 'required|numeric|min:16|max:16',
                'nama' => 'required',
                'jk' => 'required',
                'alamat' => 'required',
                'status' => 'required',
                'jabatan' => 'required',
                'bidang_id' => 'required',
            ],$pesan);
            $data = Karyawan::find($id);
            $data->update($request->all());
            Alert::success('Success', 'Data Berhasil Dirubah');
            return redirect()->route('karyawan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Karyawan::find($id)->delete();
        Alert::success('Success', 'Data Berhasil Dihapus');
        return redirect()->route('karyawan.index');
    }
}