<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\BidangController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PengembalianController;
use App\Http\Controllers\PemegangController;
use App\Http\Controllers\SearchController;

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
Route::resource('peminjaman', PeminjamanController::class);
Route::resource('pengembalian', PengembalianController::class);
Route::resource('pemegang', PemegangController::class);
Route::get('/cetak/{id}', [PemegangController::class, 'cetak']);
Route::get('/stiker', [BarangController::class,'stiker']);
});
Route::get('cari', [App\Http\Controllers\SearchController::class, 'cari']);
