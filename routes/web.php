<?php

use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// backend / route untuk crud
Route::group(['prefix' => 'admin'], function () {
    Route::resource('produk', App\Http\Controllers\ProdukController::class)->middleware('auth');
    Route::resource('merk', App\Http\Controllers\MerkController::class)->middleware('auth');
    Route::resource('kategori', App\Http\Controllers\KategoriController::class)->middleware('auth');


});

// untuk halaman guest(pengunjung) / tamu
Route::get('/', [FrontController::class, 'index']);
Route::get('produk', [FrontController::class, 'produk']);
Route::get('produk/{id}', [FrontController::class, 'detailProduk']);
Route::get('about', [FrontController::class, 'about']);
Route::get('/produk/merk/{id}', [FrontController::class, 'filterByMerk'])->name('produk.filterByMerk');
Route::get('kategori', [FrontController::class, 'produk']);

