<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\BarangsImport;
use App\Imports\BidangsImport;
use App\Imports\KaryawansImport;
use App\Imports\KategorisImport;
use App\Imports\PemegangsImport;
use App\Exports\BarangExport;
use App\Exports\KategoriExport;
use Maatwebsite\Excel\Facades\Excel;
use RealRashid\SweetAlert\Facades\Alert;
use Maatwebsite\LaravelNovaExcel\Actions\DownloadExcel;

class ExcelController extends Controller
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
    /**
    * @return \Illuminate\Support\Collection
    */
    public function importkaryawan(request $request)
    {
        $this->validate($request,[
            'file' => 'required|mimes:csv,xls,xlsx'
        ]);
        $file = $request->file('file');
        $nama = rand().$file->getClientOriginalName();
        $file->move('file_',$nama);
        Excel::import(new KaryawansImport,public_path('/file_/'.$nama));
        Alert::success('Success', 'Data Berhasil Ditambahkan');
        return back();
    }

    public function importbidang(request $request)
    {
        $this->validate($request,[
            'file' => 'required|mimes:csv,xls,xlsx'
        ]);
        $file = $request->file('file');
        $nama = rand().$file->getClientOriginalName();
        $file->move('file_',$nama);
        Excel::import(new BidangsImport,public_path('/file_/'.$nama));
        Alert::success('Success', 'Data Berhasil Ditambahkan');
        return back();
    }

    public function importbarang(request $request)
    {
        $this->validate($request,[
            'file' => 'required|mimes:csv,xls,xlsx'
        ]);
        $file = $request->file('file');
        $nama = rand().$file->getClientOriginalName();
        $file->move('file_',$nama);
        Excel::import(new BarangsImport,public_path('/file_/'.$nama));
        Alert::success('Success', 'Data Berhasil Ditambahkan');
        return back();
    }

    public function importpemegang(request $request)
    {
        $this->validate($request,[
            'file' => 'required|mimes:csv,xls,xlsx'
        ]);
        $file = $request->file('file');
        $nama = rand().$file->getClientOriginalName();
        $file->move('file_',$nama);
        Excel::import(new PemegangsImport,public_path('/file_/'.$nama));
        Alert::success('Success', 'Data Berhasil Ditambahkan');
        return back();
    }

    public function reportasetexcel()
    {
        return Excel::download(new BarangExport, 'reportbarang.xlsx');
        // (new DownloadExcel())->askForWriterType();
    }

    public function reportkategoriexcel()
    {
        return Excel::download(new KategoriExport, 'reportkategorikategori.xlsx');
    }
}
