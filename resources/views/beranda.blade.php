@extends('layouts.app')

@section('title', 'Beranda')

@section('content')

@php
    // Data sementara. Nanti ganti dengan data dari database (controller).
    $kategori = [
        ['Servis & Perbaikan', 'AC, elektronik, kendaraan, dan peralatan rumah.', '48 penyedia'],
        ['Kebersihan',         'Bersih-bersih rumah, kantor, dan laundry.',       '35 penyedia'],
        ['Instalasi',          'Pemasangan listrik, CCTV, internet, dan perabot.', '27 penyedia'],
        ['Desain & Digital',   'Poster, logo, website, dan olah data.',           '52 penyedia'],
        ['Acara & Katering',   'Dekorasi, dokumentasi, dan makanan acara.',       '19 penyedia'],
        ['Pendidikan',         'Les privat, bimbingan, dan kelas keterampilan.',  '41 penyedia'],
    ];

    $penyedia = [
        ['Budi Santoso',  'Servis AC',        '4,9', '128 ulasan', 'Rp75.000'],
        ['Siti Rahma',    'Bersih-bersih',    '4,8', '96 ulasan',  'Rp90.000'],
        ['Dimas Pratama', 'Desain grafis',    '5,0', '64 ulasan',  'Rp120.000'],
    ];

    $langkah = [
        ['Cari jasa',          'Pilih kategori atau ceritakan masalahmu.'],
        ['Pilih penyedia',     'Bandingkan harga, rating, dan ulasan.'],
        ['Penyedia mengerjakan', 'Pantau status pesanan sampai selesai.'],
        ['Bayar & beri ulasan', 'Bayar setelah selesai, lalu nilai hasilnya.'],
    ];

    $faq = [
        ['Bagaimana saya tahu penyedia bisa dipercaya?', 'Setiap penyedia diverifikasi admin sebelum tampil, dan rating berasal dari pelanggan yang benar-benar memesan.'],
        ['Kapan saya membayar?', 'Setelah pekerjaan selesai dan kamu puas. Tidak ada uang muka.'],
        ['Bagaimana kalau hasilnya tidak sesuai?', 'Laporkan lewat halaman pesanan. Admin akan membantu menengahi dengan penyedia.'],
        ['Bagaimana cara menjadi penyedia jasa?', 'Daftar akun, pilih peran penyedia, lengkapi profil dan layanan, lalu tunggu verifikasi.'],
    ];
@endphp

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,700;12..96,800&family=Figtree:wght@400;600;700&display=swap" rel="stylesheet">

<style>
    .jk { --bg:#12102b; --bg2:#0e0c22; --bg3:#161233; --card:#1c1840; --line:#2d2760;
          --violet:#8b5cf6; --violet-d:#7c3aed; --text:#ffffff; --muted:#b9b2dc;
          font-family:'Figtree',system-ui,sans-serif; color:var(--text); background:var(--bg); line-height:1.6; }
    .jk *, .jk *::before, .jk *::after { box-sizing:border-box; }
    .jk h1, .jk h2, .jk h3 { font-family:'Bricolage Grotesque',system-ui,sans-serif; margin:0; line-height:1.1; letter-spacing:-.02em; }
    .jk p { margin:0; } .jk a { color:inherit; }
    .jk-wrap { width:min(1160px,100% - 2.5rem); margin-inline:auto; }
    .jk-sec { padding:6rem 0; }
    .jk-sec h2 { font-size:clamp(2rem,4.5vw,3rem); font-weight:800; max-width:22ch; margin-bottom:.75rem; }
    .jk-sub { color:var(--muted); max-width:36rem; margin-bottom:3rem; font-size:1.1rem; }
    .jk-eyebrow { display:block; color:var(--violet); font-weight:700; font-size:.85rem; letter-spacing:.18em; text-transform:uppercase; margin-bottom:1rem; }
    .jk-hl { color:var(--violet); }

    .jk-btn { display:inline-block; padding:.9rem 1.6rem; border-radius:999px; font-weight:700; text-decoration:none; text-align:center; transition:transform .15s, background .15s; }
    .jk-btn:hover { transform:translateY(-2px); }
    .jk-btn--blue { background:var(--violet-d); color:#fff; }
    .jk-btn--blue:hover { background:var(--violet); }
    .jk-btn--sun { background:var(--violet-d); color:#fff; }
    .jk-btn--ink { background:#fff; color:#2a1b5e; }
    .jk-btn--line { border:2px solid var(--violet); color:#fff; }
    .jk a:focus-visible, .jk summary:focus-visible, .jk textarea:focus-visible { outline:3px solid var(--violet); outline-offset:3px; }

    /* Hero */
    .jk-hero { background:linear-gradient(135deg,#2a1b5e 0%,#1a1238 55%,#14102e 100%); padding:5rem 0 6rem; }
    .jk-hero__grid { display:grid; grid-template-columns:1.15fr 1fr; gap:3.5rem; align-items:center; }
    .jk-hero h1 { font-size:clamp(2.6rem,6.5vw,4.75rem); font-weight:800; margin-bottom:1.5rem; }
    .jk-hero__lead { font-size:1.2rem; color:var(--muted); max-width:32rem; margin-bottom:2rem; }
    .jk-hero__cta { display:flex; flex-wrap:wrap; gap:.75rem; margin-bottom:2rem; }
    .jk-trust { display:flex; flex-wrap:wrap; gap:.5rem 1.5rem; padding:0; margin:0; list-style:none; color:var(--muted); font-size:.95rem; }
    .jk-trust li::before { content:'\2713'; color:var(--violet); font-weight:800; margin-right:.5rem; }

    /* Panel cari jasa */
    .jk-order { background:var(--card); border:1px solid var(--line); border-radius:20px; padding:1.75rem; }
    .jk-order h2 { font-size:1.4rem; margin:0 0 .5rem; max-width:none; }
    .jk-order > p { color:var(--muted); margin-bottom:1rem; font-size:.95rem; }
    .jk-order textarea { width:100%; min-height:90px; background:var(--bg); border:1px solid var(--line); border-radius:12px; padding:.75rem; font:inherit; color:#fff; resize:vertical; }
    .jk-order textarea::placeholder { color:#7f77ad; }
    .jk-order .jk-btn { width:100%; margin-top:.75rem; border:0; cursor:pointer; font-size:1rem; }
    .jk-order__row { display:flex; justify-content:space-between; align-items:center; gap:1rem; padding-top:1rem; border-top:1px solid var(--line); margin-top:1.25rem; font-size:.95rem; }
    .jk-order__row small { color:var(--muted); }

    /* Grid & kartu */
    .jk-grid3 { display:grid; grid-template-columns:repeat(3,1fr); gap:1.25rem; }
    .jk-card { background:var(--card); border:1px solid var(--line); border-radius:20px; padding:2rem; display:flex; flex-direction:column; gap:1rem; }
    .jk-card h3 { font-size:1.45rem; } .jk-card p { color:var(--muted); flex:1; }
    .jk-card__meta { font-weight:700; color:var(--violet); }
    .jk-price { font:800 1.5rem 'Bricolage Grotesque',sans-serif; color:var(--violet); }
    .jk-price small { font:400 .9rem 'Figtree',sans-serif; color:var(--muted); }

    /* Penyedia */
    .jk-prov { background:var(--bg2); }
    .jk-tier { background:var(--card); border:1px solid var(--line); border-radius:20px; padding:2rem; display:flex; flex-direction:column; gap:1rem; }
    .jk-tier h3 { font-size:1.45rem; }
    .jk-tier__job { color:var(--muted); }
    .jk-tier__rate { display:flex; align-items:center; gap:.5rem; font-weight:700; }
    .jk-tier__rate::before { content:'\2605'; color:#c4a8ff; font-size:1.2rem; }
    .jk-tier__rate small { color:var(--muted); font-weight:400; }
    .jk-badge { align-self:flex-start; background:rgba(139,92,246,.18); color:#c4a8ff; border:1px solid var(--violet); font-size:.8rem; font-weight:700; padding:.2rem .7rem; border-radius:999px; }
    .jk-tier .jk-btn { background:var(--violet-d); color:#fff; margin-top:.5rem; }
    .jk-tier .jk-btn:hover { background:var(--violet); }

    /* Langkah */
    .jk-steps { background:var(--bg3); }
    .jk-steps ol { list-style:none; margin:0; padding:0; display:grid; grid-template-columns:repeat(4,1fr); gap:2rem; counter-reset:s; }
    .jk-steps li { counter-increment:s; }
    .jk-steps li::before { content:counter(s); display:grid; place-items:center; width:3.25rem; height:3.25rem; border-radius:50%; background:rgba(139,92,246,.18); border:2px solid var(--violet); color:#fff; font:800 1.4rem 'Bricolage Grotesque',sans-serif; margin-bottom:1.25rem; }
    .jk-steps h3 { font-size:1.3rem; margin-bottom:.4rem; } .jk-steps p { color:var(--muted); }

    /* FAQ */
    .jk-faq details { border-top:1px solid var(--line); padding:1.25rem 0; max-width:46rem; }
    .jk-faq details:last-child { border-bottom:1px solid var(--line); }
    .jk-faq summary { cursor:pointer; list-style:none; display:flex; justify-content:space-between; gap:1rem; font:700 1.2rem 'Bricolage Grotesque',sans-serif; }
    .jk-faq summary::-webkit-details-marker { display:none; }
    .jk-faq summary::after { content:'+'; color:var(--violet); font-size:1.5rem; line-height:1; }
    .jk-faq details[open] summary::after { content:'\2212'; }
    .jk-faq details p { margin-top:.75rem; color:var(--muted); }

    /* CTA */
    .jk-cta { background:linear-gradient(135deg,#6d28d9,#4c1d95); text-align:center; padding:6rem 0; }
    .jk-cta h2 { margin:0 auto 1rem; max-width:16ch; font-size:clamp(2.25rem,5.5vw,3.75rem); font-weight:800; }
    .jk-cta p { max-width:30rem; margin:0 auto 2rem; font-size:1.15rem; color:#e4d9ff; }
    .jk-cta__btns { display:flex; flex-wrap:wrap; gap:.75rem; justify-content:center; }
    .jk-cta .jk-btn--blue { background:#12102b; }

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
                <span class="jk-eyebrow">Platform Jasa Lokal</span>
                <h1>Butuh bantuan? <span class="jk-hl">Temukan penyedia jasa terpercaya.</span></h1>
                <p class="jk-hero__lead">Bandingkan penyedia jasa terverifikasi di sekitarmu, pilih yang paling cocok, lalu pesan tanpa ribet.</p>
                <div class="jk-hero__cta">
                    <a class="jk-btn jk-btn--sun" href="{{ url('/layanan') }}">Cari jasa sekarang</a>
                    <a class="jk-btn jk-btn--line" href="{{ url('/register') }}">Daftar jadi penyedia</a>
                </div>
                <ul class="jk-trust">
                    <li>Penyedia terverifikasi</li>
                    <li>Rating dari pelanggan</li>
                    <li>Bayar setelah selesai</li>
                </ul>
            </div>

            <aside class="jk-order" aria-labelledby="pesan-cepat">
                <h2 id="pesan-cepat">Ceritakan masalahmu</h2>
                <p>Kami carikan penyedia jasa yang paling cocok.</p>
                <form action="{{ url('/layanan') }}" method="GET">
                    <label for="q" class="sr-only" style="position:absolute;left:-9999px">Masalah atau jasa yang dicari</label>
                    <textarea id="q" name="q" placeholder="Contoh: AC di kamar tidak dingin dan menetes"></textarea>
                    <button type="submit" class="jk-btn jk-btn--blue">Cari penyedia</button>
                </form>
                <div class="jk-order__row">
                    <span><b>{{ count($penyedia) * 74 }}+</b> penyedia aktif</span>
                    <small>Respons rata-rata &lt; 1 jam</small>
                </div>
            </aside>
        </div>
    </section>

    {{-- KATEGORI --}}
    <section class="jk-sec">
        <div class="jk-wrap">
            <h2>Kategori jasa populer</h2>
            <p class="jk-sub">Pilih kategori, lalu bandingkan penyedia yang tersedia. Harga ditentukan masing-masing penyedia.</p>
            <div class="jk-grid3">
                @foreach ($kategori as [$nama, $isi, $jumlah])
                    <article class="jk-card">
                        <h3>{{ $nama }}</h3>
                        <p>{{ $isi }}</p>
                        <div class="jk-card__meta">{{ $jumlah }}</div>
                        <a class="jk-btn jk-btn--blue" href="{{ url('/layanan?kategori=' . urlencode($nama)) }}">Lihat penyedia</a>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    {{-- PENYEDIA TERBAIK --}}
    <section class="jk-sec jk-prov">
        <div class="jk-wrap">
            <h2>Penyedia dengan rating terbaik</h2>
            <p class="jk-sub">Semua penyedia sudah diverifikasi admin dan dinilai langsung oleh pelanggan.</p>
            <div class="jk-grid3">
                @foreach ($penyedia as [$nama, $bidang, $rating, $ulasan, $harga])
                    <article class="jk-tier">
                        <span class="jk-badge">Terverifikasi</span>
                        <h3>{{ $nama }}</h3>
                        <p class="jk-tier__job">{{ $bidang }}</p>
                        <div class="jk-tier__rate">{{ $rating }} <small>({{ $ulasan }})</small></div>
                        <div class="jk-price"><small>Mulai</small> {{ $harga }}</div>
                        <a class="jk-btn" href="{{ url('/layanan') }}">Lihat profil</a>
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

    {{-- CTA DUA SISI --}}
    <section class="jk-cta">
        <div class="jk-wrap">
            <h2>Cari jasa atau tawarkan keahlianmu.</h2>
            <p>Pelanggan menemukan penyedia yang tepat, penyedia mendapat pesanan baru. Gratis untuk mulai.</p>
            <div class="jk-cta__btns">
                <a class="jk-btn jk-btn--blue" href="{{ url('/layanan') }}">Cari jasa</a>
                <a class="jk-btn jk-btn--ink" href="{{ url('/register') }}">Daftar jadi penyedia</a>
            </div>
        </div>
    </section>

</div>

@endsection