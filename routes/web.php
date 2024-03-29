<?php

use App\Http\Controllers\ListPesananController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\StatusPesananController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages.cek.cekpesanan');
});
Route::get('dashboard', function () {
    return view('pages.dashboard');
});
Route::get('detailpesanan', function () {
    return view('pages.cek.detailpesanan');
});


// LOGIN
Route::get('login', [LoginController::class, 'index'])->name('login')->middleware('guest');

// USER 
Route::get('setting', [UserController::class, 'index'])->middleware('guest');

// PENSANAN
Route::get('pesanan', [PesananController::class, 'index'])->middleware('guest');
Route::get('tambahpesanan', [PesananController::class, 'create'])->middleware('guest');

// LIST PESANAN
Route::get('listpesanan', [ListPesananController::class, 'index'])->middleware('guest');

// STATUS
Route::get('status', [StatusPesananController::class, 'index'])->middleware('guest');

// PRODUK
Route::get('produk', [ProdukController::class, 'index'])->middleware('guest');
Route::get('tambahproduk', [ProdukController::class, 'create'])->middleware('guest');
