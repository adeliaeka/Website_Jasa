@extends('layouts.app')

@section('title', 'Layanan')

@section('content')

@php
    $kategori = [
        [
            'nama' => 'Servis & Perbaikan',
            'icon' => '🔧',
            'deskripsi' => 'AC, elektronik, kendaraan, dan peralatan rumah.',
            'harga' => 'Mulai Rp75.000',
            'penyedia' => '48 penyedia'
        ],
        [
            'nama' => 'Kebersihan',
            'icon' => '🧹',
            'deskripsi' => 'Bersih-bersih rumah, kantor, dan laundry.',
            'harga' => 'Mulai Rp90.000',
            'penyedia' => '35 penyedia'
        ],
        [
            'nama' => 'Instalasi',
            'icon' => '⚡',
            'deskripsi' => 'Pemasangan listrik, CCTV, internet, dan perabot.',
            'harga' => 'Mulai Rp50.000',
            'penyedia' => '27 penyedia'
        ],
        [
            'nama' => 'Desain & Digital',
            'icon' => '💻',
            'deskripsi' => 'Poster, logo, website, dan olah data.',
            'harga' => 'Mulai Rp120.000',
            'penyedia' => '52 penyedia'
        ],
        [
            'nama' => 'Acara & Katering',
            'icon' => '🎉',
            'deskripsi' => 'Dekorasi, dokumentasi, dan makanan acara.',
            'harga' => 'Mulai Rp200.000',
            'penyedia' => '19 penyedia'
        ],
        [
            'nama' => 'Pendidikan',
            'icon' => '📚',
            'deskripsi' => 'Les privat, bimbingan, dan kelas keterampilan.',
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
<style>
    .layanan-page {
        --bg: #12102b;
        --bg2: #1c1840;
        --line: #2d2760;
        --purple: #8b5cf6;
        --purple-dark: #7c3aed;
        --text: #ffffff;
        --muted: #b9b2dc;

        background: var(--bg);
        color: var(--text);
        font-family: 'Figtree', Arial, sans-serif;
        min-height: 100vh;
        line-height: 1.6;
    }

    .layanan-page * {
        box-sizing: border-box;
    }

    .layanan-page h1,
    .layanan-page h2,
    .layanan-page h3 {
        font-family: 'Bricolage Grotesque', Arial, sans-serif;
    }

    .layanan-hero {
        background: linear-gradient(135deg, #2a1b5e, #14102e);
        text-align: center;
        padding: 85px 20px;
    }

    .layanan-hero .label {
        color: #c4a8ff;
        font-weight: bold;
        letter-spacing: 2px;
        text-transform: uppercase;
        margin-bottom: 15px;
    }

    .layanan-hero h1 {
        font-size: clamp(30px, 5vw, 48px);
        margin: 0 0 20px;
        color: white;
    }

    .layanan-hero h1 span {
        color: var(--purple);
    }

    .layanan-hero p.deskripsi {
        color: var(--muted);
        max-width: 650px;
        margin: auto;
        line-height: 1.8;
        font-size: 16px;
    }

    .layanan-container {
        max-width: 1150px;
        margin: auto;
        padding: 70px 20px;
    }

    .layanan-judul {
        text-align: center;
        font-size: 30px;
        margin: 0 0 12px;
        color: white;
    }

    .layanan-sub {
        color: var(--muted);
        text-align: center;
        margin: 0 0 35px;
    }

    .kategori-info {
        background: #211a49;
        border: 1px solid var(--line);
        padding: 16px 20px;
        border-radius: 12px;
        margin-bottom: 30px;
        color: #e9ddff;
    }

    .kategori-info a {
        color: #c4a8ff;
        text-decoration: none;
        font-weight: bold;
    }

    .layanan-search {
        display: flex;
        gap: 10px;
        max-width: 600px;
        margin: 0 auto 40px;
    }

    .layanan-search input {
        flex: 1;
        min-width: 0;
        padding: 14px;
        border: 1px solid var(--line);
        border-radius: 10px;
        background: var(--bg2);
        color: white;
        outline: none;
        font-size: 15px;
    }

    .layanan-search input:focus {
        border-color: var(--purple);
    }

    .layanan-search input::placeholder {
        color: #9990c4;
    }

    .layanan-search button {
        padding: 12px 22px;
        border: none;
        border-radius: 10px;
        background: var(--purple-dark);
        color: white;
        font-weight: bold;
        cursor: pointer;
        transition: .3s;
    }

    .layanan-search button:hover {
        background: var(--purple);
    }

    .layanan-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 22px;
    }

    .layanan-card {
        background: var(--bg2);
        border: 1px solid var(--line);
        padding: 30px 23px;
        border-radius: 18px;
        text-align: center;
        transition: .3s;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .layanan-card:hover {
        transform: translateY(-6px);
        border-color: var(--purple);
        box-shadow: 0 10px 25px rgba(0,0,0,.2);
    }

    .layanan-icon {
        width: 72px;
        height: 72px;
        display: grid;
        place-items: center;
        border-radius: 50%;
        background: #30265f;
        border: 1px solid var(--purple);
        font-size: 32px;
        margin-bottom: 18px;
    }

    .layanan-card h3 {
        font-size: 20px;
        margin: 0 0 12px;
        color: white;
    }

    .layanan-card p {
        color: var(--muted);
        line-height: 1.7;
        font-size: 14px;
        margin: 0 0 15px;
    }

    .layanan-harga {
        color: #c4a8ff;
        font-weight: bold;
        margin-bottom: 8px;
    }