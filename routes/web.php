<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'beranda');
Route::view('/layanan', 'layanan');
Route::view('/tentang', 'tentang');
Route::view('/kontak', 'kontak');