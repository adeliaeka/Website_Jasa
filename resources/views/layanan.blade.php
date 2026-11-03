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
 
     .layanan-penyedia {
        color: var(--muted);
        font-size: 13px;
        margin-bottom: 20px;
    }
 
    .layanan-btn {
        display: inline-block;
        width: 100%;
        padding: 12px;
        background: var(--purple-dark);
        color: white;
        text-decoration: none;
        border-radius: 9px;
        font-weight: bold;
        margin-top: auto;
        transition: .3s;
    }
 
    .layanan-btn:hover {
        background: var(--purple);
        color: white;
    }
 
    .layanan-kosong {
        text-align: center;
        color: var(--muted);
        padding: 40px 20px;
        background: var(--bg2);
        border-radius: 15px;
        grid-column: 1 / -1;
    }
 
    .layanan-kosong h3 {
        color: white;
    }
 
    .layanan-cta {
        text-align: center;
        background: linear-gradient(135deg, #6d28d9, #4c1d95);
        padding: 50px 20px;
        border-radius: 18px;
        margin-top: 70px;
    }
 
    .layanan-cta h2 {
        margin: 0 0 12px;
        color: white;
    }
 
    .layanan-cta p {
        color: #e4d9ff;
        margin-bottom: 22px;
    }
 
    .layanan-cta a {
        display: inline-block;
        background: white;
        color: #2a1b5e;
        padding: 12px 28px;
        border-radius: 9px;
        text-decoration: none;
        font-weight: bold;
        transition: .3s;
    }
 
    .layanan-cta a:hover {
        background: #ede9fe;
        transform: translateY(-2px);
    }
 
    @media (max-width: 850px) {
        .layanan-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }
 
    @media (max-width: 550px) {
        .layanan-grid {
            grid-template-columns: 1fr;
        }
 
        .layanan-search {
            flex-direction: column;
        }
 
        .layanan-container {
            padding: 45px 15px;
        }
 
        .layanan-hero {
            padding: 55px 15px;
        }
    }
</style>
 
<div class="layanan-page">
 
    {{-- HERO --}}
    <section class="layanan-hero">
        <p class="label">Platform Jasa Lokal</p>
 
        <h1>Layanan <span>JasaKita</span></h1>
 
        <p class="deskripsi">
            Butuh jasa tapi sulit mencari?
            Pilih kategori jasa yang Anda butuhkan
            dan temukan penyedia jasa terpercaya
            dengan mudah dan praktis.
        </p>
    </section>
 
    {{-- KATEGORI JASA --}}
    <section class="layanan-container">
 
        <h2 class="layanan-judul">Kategori Jasa</h2>
 
        <p class="layanan-sub">
            Pilih kategori jasa yang sesuai dengan kebutuhan Anda.
            Harga dapat berbeda sesuai penyedia jasa.
        </p>
 
        {{-- KATEGORI YANG DIPILIH DARI BERANDA --}}
        @if($pilihan)
            <div class="kategori-info">
                Menampilkan kategori:
                <strong>{{ $pilihan }}</strong>
 
                &nbsp; | &nbsp;
 
                <a href="{{ url('/layanan') }}">
                    Tampilkan Semua Kategori
                </a>
            </div>
        @endif
 
        {{-- FORM PENCARIAN --}}
        <form action="{{ url('/layanan') }}" method="GET" class="layanan-search">
 
            @if($pilihan)
                <input type="hidden" name="kategori" value="{{ $pilihan }}">
            @endif
 
            <input
                type="text"
                name="q"
                placeholder="Cari kategori jasa..."
                value="{{ $pencarian }}"
            >
 
            <button type="submit">
                Cari Jasa
            </button>
 
        </form>
 
        