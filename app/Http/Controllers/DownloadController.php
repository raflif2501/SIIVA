<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use File;
use Response;
use DB;

class DownloadController extends Controller
{
    public function downloadExcelBarang()
    {
        $filepath = public_path('excel/Import Barang.xlsx');
        return Response::download($filepath);
    }
    public function downloadExcelBidang()
    {
        $filepath = public_path('excel/Import Bidang.xlsx');
        return Response::download($filepath);
    }
    public function downloadExcelKategori()
    {
        $filepath = public_path('excel/Import Kategori.xlsx');
        return Response::download($filepath);
    }
    public function downloadExcelKaryawan()
    {
        $filepath = public_path('excel/Import Karyawan.xlsx');
        return Response::download($filepath);
    }
    public function downloadExcelPemegang()
    {
        $filepath = public_path('excel/Import Pemegang Aset.xlsx');
        return Response::download($filepath);
    }
}
