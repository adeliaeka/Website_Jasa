
@extends('layouts.app')

@section('title', 'Penyediaan Layanan Jasa')

@section('content')

@php
    $layanan = [
        [
            'nama' => 'Servis AC',
            'deskripsi' => 'Melayani perbaikan AC, cuci AC, isi freon, dan pemasangan AC.',
            'harga' => 'Rp75.000',
            'icon' => '❄️'
        ],
        [
            'nama' => 'Servis Elektronik',
            'deskripsi' => 'Perbaikan televisi, kulkas, mesin cuci, dan peralatan elektronik.',
            'harga' => 'Rp50.000',
            'icon' => '🔌'
        ],
        [
            'nama' => 'Servis Kendaraan',
            'deskripsi' => 'Melayani servis motor, ganti oli, perbaikan mesin, dan pengecekan kendaraan.',
            'harga' => 'Rp60.000',
            'icon' => '🏍️'
        ],
        [
            'nama' => 'Jasa Kebersihan',
            'deskripsi' => 'Membersihkan rumah, kamar, kantor, dan area lingkungan.',
            'harga' => 'Rp90.000',
            'icon' => '🧹'
        ],
        [
            'nama' => 'Instalasi Listrik',
            'deskripsi' => 'Pemasangan lampu, stop kontak, kabel, dan perbaikan listrik.',
            'harga' => 'Rp100.000',
            'icon' => '💡'
        ],
        [
            'nama' => 'Pemasangan CCTV',
            'deskripsi' => 'Menyediakan pemasangan CCTV dan pengaturan sistem keamanan.',
            'harga' => 'Rp150.000',
            'icon' => '📹'
        ],
        [
            'nama' => 'Desain Grafis',
            'deskripsi' => 'Pembuatan desain poster, logo, banner, dan kebutuhan promosi.',
            'harga' => 'Rp50.000',
            'icon' => '🎨'
        ],
        [
            'nama' => 'Jasa Katering',
            'deskripsi' => 'Menyediakan makanan, snack, dan katering untuk berbagai acara.',
            'harga' => 'Rp25.000',
            'icon' => '🍱'
        ],
        [
            'nama' => 'Les Privat',
            'deskripsi' => 'Melayani bimbingan belajar, komputer, dan pelajaran sekolah.',
            'harga' => 'Rp80.000',
            'icon' => '📚'
        ],
    ];
@endphp

<style>
    .service-page {
        background: #12102b;
        color: white;
        min-height: 100vh;
        padding: 60px 20px;
        font-family: 'Figtree', Arial, sans-serif;
    }

    .service-container {
        max-width: 1160px;
        margin: auto;
    }

    .service-header {
        text-align: center;
        margin-bottom: 45px;
    }

    .service-header span {
        color: #a78bfa;
        font-weight: bold;
        letter-spacing: 2px;
    }

    .service-header h1 {
        font-size: 40px;
        margin: 15px 0;
    }

    .service-header p {
        color: #b9b2dc;
        font-size: 17px;
    }

    .service-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 22px;
    }

    .service-card {
        background: #1c1840;
        border: 1px solid #2d2760;
        border-radius: 20px;
        padding: 27px;
        transition: .3s;
        display: flex;
        flex-direction: column;
    }

    .service-card:hover {
        transform: translateY(-6px);
        border-color: #8b5cf6;
        box-shadow: 0 10px 25px rgba(139,92,246,.15);
    }

    .service-icon {
        width: 65px;
        height: 65px;
        background: #30215e;
        display: grid;
        place-items: center;
        font-size: 32px;
        border-radius: 15px;
        margin-bottom: 20px;
    }

    .service-card h3 {
        font-size: 22px;
        margin-bottom: 12px;
    }

    .service-card p {
        color: #b9b2dc;
        line-height: 1.7;
        flex: 1;
    }

    .service-price {
        color: #a78bfa;
        font-size: 23px;
        font-weight: bold;
        margin: 20px 0;
    }

    .service-price small {
        font-size: 13px;
        color: #b9b2dc;
        font-weight: normal;
    }

    .service-button {
        display: block;
        background: #7c3aed;
        color: white;
        padding: 13px;
        border-radius: 30px;
        text-decoration: none;
        text-align: center;
        font-weight: bold;
    }

    .service-button:hover {
        background: #8b5cf6;
    }

    .service-footer {
        background: #2a1b5e;
        padding: 40px 20px;
        text-align: center;
        border-radius: 20px;
        margin-top: 55px;
    }

    .service-footer p {
        color: #d8ccf5;
        margin-top: 10px;
    }

    @media(max-width: 850px) {
        .service-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media(max-width: 550px) {
        .service-grid {
            grid-template-columns: 1fr;
        }

        .service-header h1 {
            font-size: 30px;
        }
    }
</style>

<div class="service-page">

    <div class="service-container">

        {{-- JUDUL --}}
        <div class="service-header">

            <span>LAYANAN KAMI</span>

            <h1>Penyediaan Layanan Jasa</h1>

            <p>
                Temukan berbagai layanan jasa profesional
                sesuai kebutuhan Anda.
            </p>

        </div>

        {{-- DAFTAR LAYANAN --}}
        <div class="service-grid">

            @foreach($layanan as $item)

                <div class="service-card">

                    <div class="service-icon">
                        {{ $item['icon'] }}
                    </div>

                    <h3>{{ $item['nama'] }}</h3>

                    <p>{{ $item['deskripsi'] }}</p>

                    <div class="service-price">
                        {{ $item['harga'] }}
                        <small>/ mulai</small>
                    </div>

                    <a href="{{ url('/layanan') }}?q={{ urlencode($item['nama']) }}"
                       class="service-button">
                        Cari Penyedia
                    </a>

                </div>

            @endforeach

        </div>

        {{-- FOOTER --}}
        <div class="service-footer">

            <h2>Butuh Layanan Jasa Lainnya?</h2>

            <p>
                Temukan penyedia jasa yang sesuai dengan
                kebutuhan Anda melalui platform kami.
            </p>

            <br>

            <a href="{{ url('/layanan') }}"
               class="service-button">
                Jelajahi Semua Layanan
            </a>

        </div>

    </div>

</div>

@endsection
