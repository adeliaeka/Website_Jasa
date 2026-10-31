@extends('layouts.app')

@section('title', 'Beranda')

@section('content')

@php
    $namaBisnis = 'Jasa Andalan';
    $whatsapp   = '6281234567890';
    $wa = fn ($teks) => 'https://wa.me/' . $whatsapp . '?text=' . urlencode($teks);

    $layanan = [
        ['Servis & Perbaikan', 'Masalah didiagnosa di tempat dan diperbaiki dalam satu kunjungan.', 'Rp75.000'],
        ['Perawatan Berkala',  'Pembersihan dan pengecekan terjadwal agar tidak rusak mendadak.', 'Rp150.000'],
        ['Instalasi',          'Pemasangan lengkap, diuji, dan dijelaskan cara pakainya.', 'Rp200.000'],
    ];

    $paket = [
        ['Hemat',     'Rp150.000', ['1x kunjungan teknisi', 'Pengecekan menyeluruh', 'Garansi 14 hari'], false],
        ['Standar',   'Rp350.000', ['3x kunjungan teknisi', 'Pengecekan + pembersihan', 'Garansi 30 hari', 'Prioritas jadwal'], true],
        ['Langganan', 'Rp600.000', ['6x kunjungan teknisi', 'Perawatan berkala', 'Garansi 60 hari', 'Prioritas jadwal', 'Konsultasi tanpa batas'], false],
    ];

    $langkah = [
        ['Pilih layanan', 'Pilih layanan atau paket, lalu klik Pesan.'],
        ['Konfirmasi', 'Kami balas dengan estimasi biaya dan jadwal dalam 1 jam.'],
        ['Teknisi datang', 'Pekerjaan dikerjakan sesuai kesepakatan.'],
        ['Bayar setelah selesai', 'Bayar tunai, transfer, atau QRIS setelah Anda puas.'],
    ];

    $faq = [
        ['Berapa lama teknisi sampai?', 'Biasanya di hari yang sama bila pesan sebelum pukul 15.00.'],
        ['Kapan saya membayar?', 'Setelah pekerjaan selesai. Tidak ada uang muka.'],
        ['Bagaimana kalau masalahnya muncul lagi?', 'Selama masa garansi, kami kembali tanpa biaya tambahan.'],
    ];
@endphp

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,700;12..96,800&family=Figtree:wght@400;600;700&display=swap" rel="stylesheet">

<style>
    .jk { --ink:#0c1033; --muted:#4d5380; --blue:#2338e0; --deep:#131f8f; --sun:#ffd23f; --mist:#eef0ff; --line:#d5d9f5;
          font-family:'Figtree',system-ui,sans-serif; color:var(--ink); line-height:1.6; }
    .jk *, .jk *::before, .jk *::after { box-sizing:border-box; }
    .jk h1, .jk h2, .jk h3 { font-family:'Bricolage Grotesque',system-ui,sans-serif; margin:0; line-height:1.05; letter-spacing:-.03em; }
    .jk p { margin:0; } .jk a { color:inherit; }
    .jk-wrap { width:min(1160px,100% - 2.5rem); margin-inline:auto; }
    .jk-sec { padding:6rem 0; }
    .jk-sec h2 { font-size:clamp(2rem,4.5vw,3.25rem); font-weight:800; max-width:20ch; margin-bottom:.75rem; }
    .jk-sub { color:var(--muted); max-width:36rem; margin-bottom:3rem; font-size:1.1rem; }

    .jk-btn { display:inline-block; padding:.95rem 1.6rem; border-radius:999px; font-weight:700; text-decoration:none; text-align:center; transition:transform .15s; }
    .jk-btn:hover { transform:translateY(-2px); }
    .jk-btn--sun { background:var(--sun); color:var(--ink); }
    .jk-btn--blue { background:var(--blue); color:#fff; }
    .jk-btn--line { border:2px solid rgba(255,255,255,.4); color:#fff; }
    .jk a:focus-visible, .jk summary:focus-visible { outline:3px solid var(--sun); outline-offset:3px; }

    /* Hero */
    .jk-hero { background:var(--blue); color:#fff; padding:5rem 0 6rem; }
    .jk-hero__grid { display:grid; grid-template-columns:1.15fr 1fr; gap:3.5rem; align-items:center; }
    .jk-hero h1 { font-size:clamp(2.75rem,7vw,5.25rem); font-weight:800; margin-bottom:1.5rem; }
    .jk-hero h1 em { font-style:normal; background:var(--sun); color:var(--ink); padding:0 .15em; border-radius:.12em; }
    .jk-hero__lead { font-size:1.2rem; color:#d3d9ff; max-width:32rem; margin-bottom:2rem; }
    .jk-hero__cta { display:flex; flex-wrap:wrap; gap:.75rem; margin-bottom:2rem; }
    .jk-trust { display:flex; flex-wrap:wrap; gap:.5rem 1.5rem; padding:0; margin:0; list-style:none; color:#d3d9ff; font-size:.95rem; }
    .jk-trust li::before { content:'\2713'; color:var(--sun); font-weight:800; margin-right:.5rem; }

    /* Panel pesan cepat */
    .jk-order { background:#fff; color:var(--ink); border-radius:18px; padding:1.5rem; box-shadow:10px 10px 0 var(--deep); }
    .jk-order h2 { font-size:1.4rem; margin:0 0 1rem; max-width:none; }
    .jk-order__row { display:flex; justify-content:space-between; align-items:center; gap:1rem; padding:.9rem 0; border-top:1px solid var(--line); }
    .jk-order__row b { display:block; } .jk-order__row small { color:var(--muted); }
    .jk-order__row a { background:var(--ink); color:#fff; text-decoration:none; font-weight:700; font-size:.9rem; padding:.55rem 1rem; border-radius:999px; white-space:nowrap; }
    .jk-order__row a:hover { background:var(--blue); }

    /* Layanan */
    .jk-grid3 { display:grid; grid-template-columns:repeat(3,1fr); gap:1.25rem; }
    .jk-card { background:var(--mist); border-radius:22px; padding:2rem; display:flex; flex-direction:column; gap:1rem; }
    .jk-card h3 { font-size:1.6rem; } .jk-card p { color:var(--muted); flex:1; }
    .jk-price { font:800 1.5rem 'Bricolage Grotesque',sans-serif; color:var(--blue); }
    .jk-price small { font:400 .9rem 'Figtree',sans-serif; color:var(--muted); }

    /* Paket */
    .jk-paket { background:var(--ink); color:#fff; }
    .jk-paket .jk-sub { color:#b9bff0; }
    .jk-tier { border:2px solid #2a3070; border-radius:22px; padding:2rem; display:flex; flex-direction:column; gap:1.25rem; }
    .jk-tier--pop { background:var(--sun); color:var(--ink); border-color:var(--sun); }
    .jk-tier h3 { font-size:1.5rem; }
    .jk-tier .jk-price { color:inherit; font-size:2.25rem; }
    .jk-tier ul { list-style:none; margin:0; padding:0; display:grid; gap:.5rem; flex:1; }
    .jk-tier li::before { content:'\2713'; font-weight:800; margin-right:.6rem; }
    .jk-tier .jk-btn { background:var(--sun); color:var(--ink); }
    .jk-tier--pop .jk-btn { background:var(--ink); color:#fff; }
    .jk-badge { align-self:flex-start; background:var(--ink); color:var(--sun); font-size:.8rem; font-weight:700; padding:.2rem .7rem; border-radius:999px; }

    /* Langkah */
    .jk-steps { background:var(--mist); }
    .jk-steps ol { list-style:none; margin:0; padding:0; display:grid; grid-template-columns:repeat(4,1fr); gap:2rem; counter-reset:s; }
    .jk-steps li { counter-increment:s; }
    .jk-steps li::before { content:counter(s); display:grid; place-items:center; width:3.25rem; height:3.25rem; border-radius:50%; background:var(--blue); color:#fff; font:800 1.4rem 'Bricolage Grotesque',sans-serif; margin-bottom:1.25rem; }
    .jk-steps h3 { font-size:1.3rem; margin-bottom:.4rem; } .jk-steps p { color:var(--muted); }

    /* FAQ */
    .jk-faq details { border-top:1px solid var(--line); padding:1.25rem 0; max-width:46rem; }
    .jk-faq details:last-child { border-bottom:1px solid var(--line); }
    .jk-faq summary { cursor:pointer; list-style:none; display:flex; justify-content:space-between; gap:1rem; font:700 1.2rem 'Bricolage Grotesque',sans-serif; }
    .jk-faq summary::-webkit-details-marker { display:none; }
    .jk-faq summary::after { content:'+'; color:var(--blue); font-size:1.5rem; line-height:1; }
    .jk-faq details[open] summary::after { content:'\2212'; }
    .jk-faq details p { margin-top:.75rem; color:var(--muted); }

    /* CTA */
    .jk-cta { background:var(--sun); text-align:center; padding:6rem 0; }
    .jk-cta h2 { margin:0 auto 1rem; max-width:16ch; font-size:clamp(2.25rem,5.5vw,4rem); font-weight:800; }
    .jk-cta p { max-width:30rem; margin:0 auto 2rem; font-size:1.15rem; }

    @media (max-width:900px) {
        .jk-hero__grid { grid-template-columns:1fr; } .jk-grid3 { grid-template-columns:1fr; }
        .jk-steps ol { grid-template-columns:1fr 1fr; }
    }
    @media (max-width:560px) { .jk-sec { padding:4rem 0; } .jk-steps ol { grid-template-columns:1fr; } }
    @media (prefers-reduced-motion:reduce) { .jk-btn { transition:none; } }
</style>

<div class="jk">

    {{-- HERO --}}
    <section class="jk-hero">
        <div class="jk-wrap jk-hero__grid">
            <div>
                <h1>Butuh bantuan? <em>Pesan jasanya sekarang.</em></h1>
                <p class="jk-hero__lead">{{ $namaBisnis }} menyediakan jasa perbaikan, perawatan, dan instalasi. Teknisi datang ke lokasi Anda, harga jelas sebelum mulai.</p>
                <div class="jk-hero__cta">
                    <a class="jk-btn jk-btn--sun" href="{{ $wa('Halo, saya ingin memesan jasa.') }}" target="_blank" rel="noopener">Pesan sekarang</a>
                    <a class="jk-btn jk-btn--line" href="{{ url('/layanan') }}">Lihat semua layanan</a>
                </div>
                <ul class="jk-trust">
                    <li>Bayar setelah selesai</li>
                    <li>Garansi sampai 60 hari</li>
                    <li>Balasan dalam 1 jam</li>
                </ul>
            </div>

            <aside class="jk-order" aria-labelledby="pesan-cepat">
                <h2 id="pesan-cepat">Pesan cepat</h2>
                @foreach ($layanan as [$nama, $isi, $harga])
                    <div class="jk-order__row">
                        <div><b>{{ $nama }}</b><small>Mulai {{ $harga }}</small></div>
                        <a href="{{ $wa('Halo, saya ingin memesan ' . $nama . '.') }}" target="_blank" rel="noopener">Pesan</a>
                    </div>
                @endforeach
            </aside>
        </div>
    </section>

    {{-- LAYANAN --}}
    <section class="jk-sec">
        <div class="jk-wrap">
            <h2>Jasa yang bisa Anda pesan</h2>
            <p class="jk-sub">Pilih yang sesuai kebutuhan. Harga di bawah adalah harga mulai, biaya pasti kami sampaikan sebelum pekerjaan dimulai.</p>
            <div class="jk-grid3">
                @foreach ($layanan as [$nama, $isi, $harga])
                    <article class="jk-card">
                        <h3>{{ $nama }}</h3>
                        <p>{{ $isi }}</p>
                        <div class="jk-price"><small>Mulai</small> {{ $harga }}</div>
                        <a class="jk-btn jk-btn--blue" href="{{ $wa('Halo, saya ingin memesan ' . $nama . '.') }}" target="_blank" rel="noopener">Pesan layanan ini</a>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    {{-- PAKET --}}
    <section class="jk-sec jk-paket">
        <div class="jk-wrap">
            <h2>Paket hemat untuk pelanggan tetap</h2>
            <p class="jk-sub">Sering butuh jasa kami? Paket kunjungan lebih murah dibanding pesan satuan.</p>
            <div class="jk-grid3">
                @foreach ($paket as [$nama, $harga, $fitur, $populer])
                    <article class="jk-tier {{ $populer ? 'jk-tier--pop' : '' }}">
                        @if ($populer)<span class="jk-badge">Paling banyak dipilih</span>@endif
                        <h3>Paket {{ $nama }}</h3>
                        <div class="jk-price">{{ $harga }}</div>
                        <ul>@foreach ($fitur as $f)<li>{{ $f }}</li>@endforeach</ul>
                        <a class="jk-btn" href="{{ $wa('Halo, saya ingin memesan Paket ' . $nama . '.') }}" target="_blank" rel="noopener">Pilih paket {{ $nama }}</a>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    {{-- LANGKAH --}}
    <section class="jk-sec jk-steps">
        <div class="jk-wrap">
            <h2>Cara memesan</h2>
            <p class="jk-sub">Empat langkah, tanpa ribet dan tanpa uang muka.</p>
            <ol>
                @foreach ($langkah as [$judul, $isi])
                    <li><h3>{{ $judul }}</h3><p>{{ $isi }}</p></li>
                @endforeach
            </ol>
        </div>
    </section>

    {{-- FAQ --}}
    <section class="jk-sec jk-faq">
        <div class="jk-wrap">
            <h2>Pertanyaan sebelum memesan</h2>
            <p class="jk-sub">Jawaban singkat untuk hal yang paling sering ditanyakan.</p>
            @foreach ($faq as [$tanya, $jawab])
                <details><summary>{{ $tanya }}</summary><p>{{ $jawab }}</p></details>
            @endforeach
        </div>
    </section>

    {{-- CTA --}}
    <section class="jk-cta">
        <div class="jk-wrap">
            <h2>Siap memesan? Cukup satu pesan.</h2>
            <p>Kirim kebutuhan Anda lewat WhatsApp. Estimasi biaya dan jadwal kami balas dalam 1 jam, Senin–Sabtu pukul 08.00–20.00.</p>
            <a class="jk-btn jk-btn--blue" href="{{ $wa('Halo, saya butuh bantuan.') }}" target="_blank" rel="noopener">Chat WhatsApp sekarang</a>
        </div>
    </section>

</div>

@endsection