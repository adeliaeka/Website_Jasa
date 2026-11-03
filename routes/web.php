<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'beranda');
Route::view('/layanan', 'layanan')->name('penyediaan');
Route::view('/tentang', 'tentang');
Route::view('/kontak', 'kontak');
Route::view('/penyediaan','penyediaan');