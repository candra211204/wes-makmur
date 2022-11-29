<?php

use App\Http\Controllers\BerandaController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\RekomendasiController;
use App\Http\Controllers\UserController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {
    // Rute tabel kategori
    Route::resource('kategori', KategoriController::class);
    Route::get('hapusKategori/{id}', [KategoriController::class, 'destroy']);

    // Rute tabel produk
    Route::resource('produk', ProdukController::class);
    Route::get('hapusProduk/{id}', [ProdukController::class, 'destroy']);

    // Rute tabel post
    Route::resource('post', PostController::class);
    Route::get('hapusPost/{id}', [PostController::class, 'destroy']);

    // Rute tabel user
    Route::resource('user', UserController::class)->middleware('editor');
});

// Rute ke halaman beranda
Route::resource('/', BerandaController::class);
Route::resource('beranda', BerandaController::class);
Route::get('detail/{id}', [BerandaController::class, 'detail']);

// Rute ke halaman rekomendasi
Route::resource('rekomendasi', RekomendasiController::class);