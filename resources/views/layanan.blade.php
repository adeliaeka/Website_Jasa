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
        font-family: Arial, sans-serif;
        min-height: 100vh;
    }

    .layanan-page * {
        box-sizing: border-box;
    }

    .layanan-hero {
        background: linear-gradient(135deg, #2a1b5e, #14102e);
        text-align: center;
        padding: 75px 20px;
    }

    .layanan-hero .label {
        color: #c4a8ff;
        font-weight: bold;
        letter-spacing: 2px;
        text-transform: uppercase;
        margin-bottom: 15px;
    }

    .layanan-hero h1 {
        font-size: clamp(30px, 5vw, 45px);
        margin: 0 0 20px;
    }

    .layanan-hero h1 span {
        color: var(--purple);
    }

    .layanan-hero p {
        color: var(--muted);
        max-width: 650px;
        margin: auto;
        line-height: 1.8;
    }

    .layanan-container {
        max-width: 1150px;
        margin: auto;
        padding: 65px 20px;
    }

    .layanan-judul {
        text-align: center;
        font-size: 30px;
        margin-bottom: 12px;
    }

    .layanan-sub {
        color: var(--muted);
        text-align: center;
        margin-bottom: 35px;
    }

    .kategori-info {
        background: #211a49;
        border: 1px solid var(--line);
        padding: 15px 20px;
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
    }

    .layanan-search button {
        padding: 12px 22px;
        border: none;
        border-radius: 10px;
        background: var(--purple-dark);
        color: white;
        font-weight: bold;
        cursor: pointer;
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
        padding: 28px 22px;
        border-radius: 18px;
        text-align: center;
        transition: .3s;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .layanan-card:hover {
        transform: translateY(-5px);
        border-color: var(--purple);
    }

    .layanan-icon {
        width: 70px;
        height: 70px;
        display: grid;
        place-items: center;
        border-radius: 50%;
        background: #30265f;
        font-size: 32px;
        margin-bottom: 18px;
    }

    .layanan-card h3 {
        font-size: 20px;
        margin: 0 0 12px;
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
    }

    .layanan-kosong {
        text-align: center;
        color: var(--muted);
        padding: 40px 15px;
        background: var(--bg2);
        border-radius: 15px;
        grid-column: 1 / -1;
    }

    .layanan-cta {
        text-align: center;
        background: linear-gradient(135deg, #6d28d9, #4c1d95);
        padding: 45px 20px;
        border-radius: 18px;
        margin-top: 65px;
    }

    .layanan-cta h2 {
        margin: 0 0 12px;
    }

    .layanan-cta p {
        color: #e4d9ff;
        margin-bottom: 22px;
    }

    .layanan-cta a {
        display: inline-block;
        background: white;
        color: #2a1b5e;
        padding: 12px 25px;
        border-radius: 9px;
        text-decoration: none;
        font-weight: bold;
    }

    @media (max-width: 800px) {
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
    }
    </style>

<div class="layanan-page">

    {{-- HERO --}}
    <section class="layanan-hero">
        <p class="label">Platform Jasa Lokal</p>

        <h1>Layanan <span>JasaKita</span></h1>

        <p>
            Temukan berbagai layanan jasa sesuai kebutuhan Anda.
            Pilih kategori dan temukan penyedia jasa terpercaya
            dengan mudah dan praktis.
        </p>
    </section>

    {{-- DAFTAR KATEGORI --}}
    <section class="layanan-container">

        <h2 class="layanan-judul">Kategori Jasa</h2>

        <p class="layanan-sub">
            Pilih kategori jasa yang sesuai dengan kebutuhan Anda.
        </p>

        {{-- INFORMASI KATEGORI YANG DIPILIH --}}
        @if($pilihan)
            <div class="kategori-info">
                Menampilkan kategori:
                <strong>{{ $pilihan }}</strong>
                &nbsp; | &nbsp;
                <a href="{{ url('/layanan') }}">Tampilkan semua kategori</a>
            </div>
        @endif

        {{-- PENCARIAN --}}
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

            <button type="submit">Cari Jasa</button>
        </form>

        {{-- KARTU KATEGORI --}}
        <div class="layanan-grid">

            @forelse($hasil as $item)

                <div class="layanan-card">

                    <div class="layanan-icon">
                        {{ $item['icon'] }}
                    </div>

                    <h3>{{ $item['nama'] }}</h3>

                    <p>{{ $item['deskripsi'] }}</p>

                    <div class="layanan-harga">
                        {{ $item['harga'] }}
                    </div>

                    <div class="layanan-penyedia">
                        {{ $item['penyedia'] }}
                    </div>

                    <a
                        href="{{ url('/register') }}"
                        class="layanan-btn"
                    >
                        Pilih Layanan
                    </a>

                </div>

            @empty

                <div class="layanan-kosong">
                    <h3>Kategori tidak ditemukan</h3>
                    <p>Silakan pilih kategori lainnya atau coba kata kunci berbeda.</p>
                    <a href="{{ url('/layanan') }}" class="layanan-btn">
                        Lihat Semua Kategori
                    </a>
                </div>

            @endforelse

        </div>

        {{-- CTA --}}
        <div class="layanan-cta">
            <h2>Ingin Menjadi Penyedia Jasa?</h2>

            <p>
                Daftarkan diri Anda dan tawarkan keahlian
                kepada pelanggan melalui JasaKita.
            </p>

            <a href="{{ url('/register') }}">
                Daftar Sekarang
            </a>
        </div>

    </section>

</div>

@endsection
```