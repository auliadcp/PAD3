<?php

use App\Http\Controllers\JenisProdukController;
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
})->middleware('guest');
Route::get('home', function () {
    return view('pages.cek.cekpesanan');
})->middleware('guest');
Route::get('dashboard', function () {
    return view('pages.dashboard');
});
Route::get('detailpesanan', function () {
    return view('pages.cek.detailpesanan');
});


// LOGIN
Route::get('login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('signin', [LoginController::class, 'authentication'])->middleware('guest');
Route::get('registrasi', [LoginController::class, 'registrasi'])->middleware('guest');
Route::post('signup', [LoginController::class, 'signup'])->middleware('guest');
Route::get('logout', [LoginController::class, 'logout'])->middleware('auth');

// USER
Route::get('setting', [UserController::class, 'index'])->middleware('auth');

// PENSANAN
Route::get('pesanan', [PesananController::class, 'index'])->middleware('auth');
Route::get('tambahpesanan', [PesananController::class, 'create'])->middleware('auth');

// LIST PESANAN
Route::get('listpesanan', [ListPesananController::class, 'index'])->middleware('auth');

// STATUS
Route::get('status', [StatusPesananController::class, 'index'])->middleware('auth');

// PRODUK
Route::get('produk', [ProdukController::class, 'index'])->middleware('auth');
Route::get('produk/add', [ProdukController::class, 'create'])->middleware('auth');
Route::post('produk/store', [ProdukController::class, 'store'])->middleware('auth');
Route::get('produk/show/{id}', [ProdukController::class, 'show'])->middleware('auth');
Route::get('produk/edit/{id}', [ProdukController::class, 'edit'])->middleware('auth');
Route::post('produk/update/{id}', [ProdukController::class, 'store'])->middleware('auth');
Route::get('produk/delete/{id}', [ProdukController::class, 'destroy'])->middleware('auth');

// PRODUK
Route::get('jenis_produk', [JenisProdukController::class, 'index'])->middleware('auth');
Route::get('jenis_produk/add', [JenisProdukController::class, 'create'])->middleware('auth');
Route::post('jenis_produk/store', [JenisProdukController::class, 'store'])->middleware('auth');
Route::get('jenis_produk/show/{id}', [JenisProdukController::class, 'show'])->middleware('auth');
Route::get('jenis_produk/edit/{id}', [JenisProdukController::class, 'edit'])->middleware('auth');
Route::post('jenis_produk/update/{id}', [JenisProdukController::class, 'update'])->middleware('auth');
Route::get('jenis_produk/delete/{id}', [JenisProdukController::class, 'destroy'])->middleware('auth');
