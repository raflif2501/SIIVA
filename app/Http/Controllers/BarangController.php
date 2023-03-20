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
        // $qrcode = QrCode::size(100)->generate($kode);
        // var_dump($qrcode);
        return view('barang.create',compact('kode'));
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
                'kode_barang' => 'required',
                'nama_barang' => 'required',
                'merktype' => 'required',
                'status' => 'required',
                'kondisi' => 'required',
                'tahun' => 'required',
                'sumber' => 'required',
                'nama_bidang' => 'required',
                'ruang' => 'required',
                'kategori' => 'required',
                'perawatan' => 'required',
                'jangka_waktu' => 'required',
                'tanggal_perawatan' => 'required',
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
                    'kode_barang' => $request->kode_barang,
                    'nama_barang' => $request->nama_barang,
                    'merktype' => $request->merktype,
                    'status' => $request->status,
                    'kondisi' => $request->kondisi,
                    'tahun' => $request->tahun,
                    'sumber' => $request->sumber,
                ]);
            }else{
                Barang::create([
                    'id' => $id,
                    'kode_barang' => $request->kode_barang,
                    'merktype' => $request->merktype,
                    'status' => $request->status,
                    'kondisi' => $request->kondisi,
                    'tahun' => $request->tahun,
                    'sumber' => $request->sumber,
                ]);
            }
            Kategori::create([
                'id' => $id,
                'barang_id' => $id,
                'kategori' => $request->kategori,
                'perawatan' => $request->perawatan,
                'jangka_waktu' => $request->jangka_waktu,
                'tanggal_perawatan' => $request->tanggal_perawatan,
            ]);
            Bidang::create([
                'id' => $id,
                'barang_id' => $id,
                'nama_bidang' => $request->nama_bidang,
                'ruang' => $request->ruang,
            ]);
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
        return view('barang.edit', compact('data'));
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
            'kode_barang' => 'required',
            'nama_barang' => 'required',
            'merktype' => 'required',
            'status' => 'required',
            'kondisi' => 'required',
            'tahun' => 'required',
            'sumber' => 'required',
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
        $data = Barang::find($id);
        $data1 = Bidang::find($id);
        $data2 = Kategori::where('id',$id)->first();
        // var_dump($data2);
        // die;
        if ($data2 != null) {
                $data2->delete();
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
}
