<?php

use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\ProdukController;
use App\Models\Produk;
use Illuminate\Support\Facades\Route;

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

// Halaman Pelanggan
Route::get('/', function () {
    return view('the_she/Halaman_Pelanggan/beranda', [
        "produks" => Produk::all(),
    ]);
});
Route::get('/login', function () {
    return view('the_she/Halaman_Pelanggan/Log_Register/login');
});
Route::get('/daftar-pelanggan', function () {
    return view('the_she/Halaman_Pelanggan/Log_Register/daftar');
});
Route::get('/detail-produk', function () {
    return view('the_she/Halaman_Pelanggan/detailproduk');
});

// Halaman Admin
Route::get('/Admin', function () {
    return view('the_she/Halaman_Admin/Dashboard');
});
Route::resource('/Admin/produk', ProdukController::class);
Route::resource('/Admin/pesanan', PesananController::class);
Route::resource('/Admin/pelanggan', PelangganController::class);

