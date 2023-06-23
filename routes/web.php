<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\BidangController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\PemegangController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ExcelController;
use App\Http\Controllers\DownloadController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['middelware'=>['auth']], function(){
Route::resource('users', UserController::class);
Route::resource('aset', BarangController::class);
Route::resource('bidang', BidangController::class);
Route::resource('kategori', KategoriController::class);
Route::resource('karyawan', KaryawanController::class);
Route::resource('pemegang', PemegangController::class);
Route::get('/cetak/{id}', [PemegangController::class, 'cetak']);
Route::get('/arsip', [PemegangController::class, 'arsip']);
Route::get('/pemegangbaru', [PemegangController::class, 'baru']);
Route::get('/pemegangganti', [PemegangController::class, 'ganti']);
Route::get('/perubahan', [PemegangController::class, 'perubahan']);
Route::get('/stiker/{id}', [PemegangController::class, 'stiker']);
Route::get('/stiker', [BarangController::class,'stiker']);
Route::get('/stikerbaru', [BarangController::class,'stikerbaru']);
Route::get('/asetbaru', [BarangController::class, 'baru']);
Route::get('/reportkategori', [BarangController::class, 'reportkategori']);
Route::get('/reportkategoripdf', [BarangController::class, 'reportkategoripdf']);
Route::get('/reportaset', [BarangController::class, 'reportaset']);
Route::get('/reportaset_', [BarangController::class, 'reportaset_']);
Route::get('/report/{kode_barang}', [BarangController::class, 'report']);
Route::get('/reportasetpdf', [BarangController::class, 'reportasetpdf']);
Route::get('/karyawanbaru', [KaryawanController::class, 'baru']);
Route::get('/karyawanmutasi', [KaryawanController::class, 'mts']);
Route::get('/mutasikaryawan', [KaryawanController::class, 'mutasi']);
Route::get('/userdiperbarui', [UserController::class, 'baru']);
Route::post('/importkaryawan', [ExcelController::class, 'importkaryawan']);
Route::post('/importkategori', [ExcelController::class, 'importkategori']);
Route::post('/importbidang', [ExcelController::class, 'importbidang']);
Route::post('/importbarang', [ExcelController::class, 'importbarang']);
Route::post('/importpemegang', [ExcelController::class, 'importpemegang']);
Route::get('/reportasetexcel', [ExcelController::class, 'reportasetexcel']);
Route::get('/reportkategoriexcel', [ExcelController::class, 'reportkategoriexcel']);
Route::get('/downloadExcelBarang', [DownloadController::class, 'downloadExcelBarang']);
Route::get('/downloadExcelBidang', [DownloadController::class, 'downloadExcelBidang']);
Route::get('/downloadExcelKategori', [DownloadController::class, 'downloadExcelKategori']);
Route::get('/downloadExcelKaryawan', [DownloadController::class, 'downloadExcelKaryawan']);
Route::get('/downloadExcelPemegang', [DownloadController::class, 'downloadExcelPemegang']);
});
Route::get('cari', [App\Http\Controllers\SearchController::class, 'cari']);
