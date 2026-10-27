```php
<?php

use Illuminate\Support\Facades\Route;

// Halaman Beranda
Route::view('/', 'beranda');

// Halaman Layanan
Route::view('/layanan', 'layanan');

// Halaman Tentang
Route::view('/tentang', 'tentang');

// Halaman Kontak
Route::view('/kontak', 'kontak');