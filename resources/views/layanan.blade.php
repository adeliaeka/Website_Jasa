```php
@extends('layouts.app')

@section('title', 'Layanan')

@section('content')

@php
    $kategori = [
        [
            'nama' => 'Servis & Perbaikan',
            'icon' => '🔧',
            'deskripsi' => 'Layanan servis AC, elektronik, kendaraan, dan peralatan rumah.',
            'harga' => 'Mulai Rp75.000',
            'penyedia' => '48 penyedia'
        ],
        [
            'nama' => 'Kebersihan',
            'icon' => '🧹',
            'deskripsi' => 'Layanan kebersihan rumah, kantor, kos, dan laundry.',
            'harga' => 'Mulai Rp90.000',
            'penyedia' => '35 penyedia'
        ],
        [
            'nama' => 'Instalasi',
            'icon' => '⚡',
            'deskripsi' => 'Pemasangan listrik, CCTV, internet, dan perabot rumah.',
            'harga' => 'Mulai Rp50.000',
            'penyedia' => '27 penyedia'
        ],
        [
            'nama' => 'Desain & Digital',
            'icon' => '💻',
            'deskripsi' => 'Jasa desain poster, logo, website, dan pengolahan data.',
            'harga' => 'Mulai Rp120.000',
            'penyedia' => '52 penyedia'
        ],
        [
            'nama' => 'Acara & Katering',
            'icon' => '🎉',
            'deskripsi' => 'Jasa dekorasi, fotografi, dokumentasi, dan katering.',
            'harga' => 'Mulai Rp200.000',
            'penyedia' => '19 penyedia'
        ],
        [
            'nama' => 'Pendidikan',
            'icon' => '📚',
            'deskripsi' => 'Les privat, bimbingan belajar, dan kelas keterampilan.',
            'harga' => 'Mulai Rp50.000',
            'penyedia' => '41 penyedia'
        ],
    ];

    $pilihan = request('kategori');
    $pencarian = request('q');

    $hasil = collect($kategori)->filter(function ($item) use ($pilihan, $pencarian) {
        $sesuaiKategori = !$pilihan || $item['nama'] === $pilihan;

        $sesuaiPencarian = !$pencarian ||
            stripos($item['nama'], $pencarian) !== false ||
            stripos($item['deskripsi'], $pencarian) !== false;

        return $sesuaiKategori && $sesuaiPencarian;
    });
@endphp