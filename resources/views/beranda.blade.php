@extends('layouts.app')

@section('title', 'Beranda')

@section('content')

@php
    $namaBisnis = 'Jasa Andalan';
    $whatsapp   = '6281234567890';
    $wa = fn ($teks) => 'https://wa.me/' . $whatsapp . '?text=' . urlencode($teks);

    // Papan jadwal hari ini (ganti dengan data dari database bila perlu)
    $jadwal = [
        ['09.00', 'Servis & Perbaikan', 'Banyumanik',  'Tersedia'],
        ['10.30', 'Perawatan Berkala',  'Tembalang',   'Penuh'],
        ['13.00', 'Instalasi',          'Semarang Barat', 'Tersedia'],
        ['15.30', 'Servis & Perbaikan', 'Gajahmungkur', 'Tersedia'],
        ['17.00', 'Konsultasi',         'Online',      'Tersedia'],
    ];

    $layanan = [
        ['Servis & Perbaikan', 'Teknisi datang, mendiagnosa di tempat, dan memperbaiki dalam satu kunjungan bila suku cadang ada.', 'Mulai Rp75.000', 'besar'],
        ['Perawatan Berkala',  'Pembersihan dan pengecekan terjadwal supaya masalah kecil tidak jadi mahal.', 'Mulai Rp150.000', ''],
        ['Instalasi',          'Pemasangan lengkap dengan pengujian dan penjelasan cara pakai.', 'Mulai Rp200.000', ''],
        ['Konsultasi',         'Diskusi kebutuhan dan anggaran sebelum Anda memutuskan.', 'Gratis', 'kuning'],
    ];

    $langkah = [
        ['Kirim pesan', 'Ceritakan masalah Anda lewat WhatsApp.'],
        ['Terima penawaran', 'Estimasi biaya dan jadwal masuk dalam 1 jam.'],
        ['Teknisi datang', 'Pekerjaan sesuai kesepakatan, tanpa biaya tambahan.'],
        ['Bergaransi', 'Ada masalah lagi dalam 30 hari, kami kembali gratis.'],
    ];

    $faq = [
        ['Berapa lama teknisi sampai?', 'Untuk area Semarang kota, biasanya di hari yang sama bila pesan sebelum pukul 15.00.'],
        ['Apakah ada biaya survei?', 'Tidak. Estimasi awal gratis, dan biaya baru dikenakan setelah Anda setuju.'],
        ['Metode pembayaran apa saja?', 'Tunai, transfer bank, dan QRIS setelah pekerjaan selesai.'],
        ['Bagaimana garansinya?', 'Setiap pekerjaan bergaransi 30 hari untuk masalah yang sama.'],
    ];
@endphp

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,500;12..96,700;12..96,800&family=Figtree:wght@400;600;700&display=swap" rel="stylesheet">

<style>
    .jk {
        --ink: #0c1033; --muted: #4d5380; --blue: #2338e0; --blue-deep: #131f8f;
        --sun: #ffd23f; --mist: #eef0ff; --line: #d5d9f5; --white: #fff;
        font-family: 'Figtree', system-ui, sans-serif; color: var(--ink); line-height: 1.6;
    }
    .jk *, .jk *::before, .jk *::after { box-sizing: border-box; }
    .jk h1, .jk h2, .jk h3 { font-family: 'Bricolage Grotesque', system-ui, sans-serif; margin: 0; line-height: 1.05; letter-spacing: -0.03em; }
    .jk p { margin: 0; }
    .jk a { color: inherit; }
    .jk-wrap { width: min(1160px, 100% - 2.5rem); margin-inline: auto; }
    .jk-sec { padding: 6rem 0; }
    .jk-sec h2 { font-size: clamp(2rem, 4.5vw, 3.25rem); font-weight: 800; max-width: 18ch; margin-bottom: 3rem; }

    .jk-btn { display: inline-block; padding: 1rem 1.75rem; border-radius: 999px; font-weight: 700; text-decoration: none; transition: transform .15s, background-color .15s; }
    .jk-btn:hover { transform: translateY(-2px); }
    .jk-btn--sun { background: var(--sun); color: var(--ink); }
    .jk-btn--line { border: 2px solid rgba(255,255,255,.4); color: var(--white); }
    .jk-btn--blue { background: var(--blue); color: var(--white); }
    .jk a:focus-visible, .jk summary:focus-visible { outline: 3px solid var(--sun); outline-offset: 3px; }

    /* HERO */
    .jk-hero { background: var(--blue); color: var(--white); padding: 5rem 0 6rem; overflow: hidden; }
    .jk-hero__grid { display: grid; grid-template-columns: 1.15fr 1fr; gap: 3.5rem; align-items: center; }
    .jk-hero h1 { font-size: clamp(2.75rem, 7vw, 5.5rem); font-weight: 800; margin-bottom: 1.5rem; }
    .jk-hero h1 em { font-style: normal; background: var(--sun); color: var(--ink); padding: 0 .15em; border-radius: .12em; }
    .jk-hero__lead { font-size: 1.2rem; color: #d3d9ff; max-width: 32rem; margin-bottom: 2.25rem; }
    .jk-hero__cta { display: flex; flex-wrap: wrap; gap: .75rem; }

    /* PAPAN JADWAL */
    .jk-board { background: var(--ink); border-radius: 18px; padding: 1.5rem; box-shadow: 10px 10px 0 var(--blue-deep); }
    .jk-board__top { display: flex; justify-content: space-between; align-items: center; margin-bottom: 1rem; font-weight: 700; }
    .jk-board__top span:last-child { font-size: .85rem; color: #9aa2e6; font-weight: 400; }
    .jk-row { display: grid; grid-template-columns: 4.2rem 1fr auto; gap: 1rem; align-items: center; padding: .85rem 0; border-top: 1px solid #262c6b; animation: jk-in .5s both; }
    .jk-row:nth-child(2) { animation-delay: .15s } .jk-row:nth-child(3) { animation-delay: .3s }
    .jk-row:nth-child(4) { animation-delay: .45s } .jk-row:nth-child(5) { animation-delay: .6s } .jk-row:nth-child(6) { animation-delay: .75s }
    .jk-row b { font-family: 'Bricolage Grotesque', sans-serif; font-size: 1.35rem; color: var(--sun); }
    .jk-row div { font-size: .95rem; } .jk-row small { display: block; color: #9aa2e6; font-size: .8rem; }
    .jk-tag { font-size: .8rem; font-weight: 700; padding: .25rem .75rem; border-radius: 999px; background: #1f8a5b; color: #fff; }
    .jk-tag--penuh { background: #5b2a3a; color: #ffb3c0; }
    @keyframes jk-in { from { opacity: 0; transform: translateY(-10px) rotateX(70deg); } to { opacity: 1; transform: none; } }

    /* LAYANAN (bento) */
    .jk-bento { display: grid; grid-template-columns: repeat(3, 1fr); grid-auto-rows: minmax(15rem, auto); gap: 1.25rem; }
    .jk-card { background: var(--mist); border-radius: 22px; padding: 2rem; display: flex; flex-direction: column; justify-content: space-between; gap: 1.5rem; }
    .jk-card h3 { font-size: 1.6rem; font-weight: 700; margin-bottom: .6rem; }
    .jk-card p { color: var(--muted); }
    .jk-card__harga { font-weight: 700; color: var(--blue); }
    .jk-card--besar { grid-column: span 2; grid-row: span 2; background: var(--ink); color: var(--white); }
    .jk-card--besar h3 { font-size: clamp(2rem, 4vw, 3rem); }
    .jk-card--besar p { color: #b9bff0; max-width: 28rem; font-size: 1.1rem; }
    .jk-card--besar .jk-card__harga { color: var(--sun); }
    .jk-card--kuning { background: var(--sun); }
    .jk-card--kuning p, .jk-card--kuning .jk-card__harga { color: var(--ink); }

    /* LANGKAH */
    .jk-steps { background: var(--mist); }
    .jk-steps ol { list-style: none; margin: 0; padding: 0; display: grid; grid-template-columns: repeat(4, 1fr); gap: 2rem; counter-reset: s; }
    .jk-steps li { counter-increment: s; }
    .jk-steps li::before { content: counter(s); display: grid; place-items: center; width: 3.25rem; height: 3.25rem; border-radius: 50%; background: var(--blue); color: #fff; font: 800 1.4rem 'Bricolage Grotesque', sans-serif; margin-bottom: 1.25rem; }
    .jk-steps h3 { font-size: 1.3rem; margin-bottom: .4rem; } .jk-steps p { color: var(--muted); }

    /* TESTIMONI */
    .jk-quote { display: grid; grid-template-columns: 1.4fr 1fr; gap: 3rem; align-items: start; }
    .jk-quote__big { font: 700 clamp(1.6rem, 3vw, 2.4rem)/1.2 'Bricolage Grotesque', sans-serif; letter-spacing: -0.02em; }
    .jk-quote__who { margin-top: 1.25rem; color: var(--muted); }
    .jk-quote__small { display: grid; gap: 1.5rem; }
    .jk-quote__small p { padding-left: 1.1rem; border-left: 4px solid var(--sun); }
    .jk-quote__small span { display: block; margin-top: .4rem; font-size: .9rem; color: var(--muted); }

    /* FAQ */
    .jk-faq { background: var(--ink); color: var(--white); }
    .jk-faq h2 { color: var(--white); }
    .jk-faq details { border-top: 1px solid #2a3070; padding: 1.25rem 0; max-width: 46rem; }
    .jk-faq details:last-child { border-bottom: 1px solid #2a3070; }
    .jk-faq summary { cursor: pointer; font: 700 1.2rem 'Bricolage Grotesque', sans-serif; list-style: none; display: flex; justify-content: space-between; gap: 1rem; }
    .jk-faq summary::-webkit-details-marker { display: none; }
    .jk-faq summary::after { content: '+'; color: var(--sun); font-size: 1.5rem; line-height: 1; }
    .jk-faq details[open] summary::after { content: '\2212'; }
    .jk-faq details p { margin-top: .75rem; color: #b9bff0; }

    /* CTA */
    .jk-cta { background: var(--sun); text-align: center; padding: 6rem 0; }
    .jk-cta h2 { margin: 0 auto 1rem; max-width: 16ch; font-size: clamp(2.25rem, 5.5vw, 4.25rem); font-weight: 800; }
    .jk-cta p { max-width: 30rem; margin: 0 auto 2rem; font-size: 1.15rem; }

    @media (max-width: 900px) {
        .jk-hero__grid, .jk-quote { grid-template-columns: 1fr; }
        .jk-bento { grid-template-columns: 1fr 1fr; } .jk-card--besar { grid-column: span 2; grid-row: auto; }
        .jk-steps ol { grid-template-columns: 1fr 1fr; }
    }
    @media (max-width: 560px) {
        .jk-sec { padding: 4rem 0; } .jk-bento, .jk-steps ol { grid-template-columns: 1fr; } .jk-card--besar { grid-column: auto; }
    }
    @media (prefers-reduced-motion: reduce) { .jk-row { animation: none; } .jk-btn { transition: none; } }
</style>

<div class="jk">

    {{-- HERO --}}
    <section class="jk-hero">
        <div class="jk-wrap jk-hero__grid">
            <div>
                <h1>Ada masalah? Teknisi kami <em>datang hari ini.</em></h1>
                <p class="jk-hero__lead">{{ $namaBisnis }} melayani perbaikan, perawatan, dan pemasangan. Harga jelas di awal, pekerjaan bergaransi 30 hari.</p>
                <div class="jk-hero__cta">
                    <a class="jk-btn jk-btn--sun" href="{{ $wa('Halo, saya ingin memesan layanan.') }}" target="_blank" rel="noopener">Pesan lewat WhatsApp</a>
                    <a class="jk-btn jk-btn--line" href="#layanan">Lihat layanan</a>
                </div>
            </div>

            <div class="jk-board" role="table" aria-label="Jadwal teknisi hari ini">
                <div class="jk-board__top"><span>Jadwal hari ini</span><span>Diperbarui setiap pagi</span></div>
                @foreach ($jadwal as [$jam, $nama, $area, $status])
                    <div class="jk-row" role="row">
                        <b>{{ $jam }}</b>
                        <div>{{ $nama }}<small>{{ $area }}</small></div>
                        <span class="jk-tag {{ $status === 'Penuh' ? 'jk-tag--penuh' : '' }}">{{ $status }}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- LAYANAN --}}
    <section class="jk-sec" id="layanan">
        <div class="jk-wrap">
            <h2>Satu tim untuk semua kebutuhan Anda</h2>
            <div class="jk-bento">
                @foreach ($layanan as [$nama, $isi, $harga, $varian])
                    <article class="jk-card {{ $varian ? 'jk-card--' . $varian : '' }}">
                        <div><h3>{{ $nama }}</h3><p>{{ $isi }}</p></div>
                        <span class="jk-card__harga">{{ $harga }}</span>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    {{-- LANGKAH --}}
    <section class="jk-sec jk-steps">
        <div class="jk-wrap">
            <h2>Dari pesan pertama sampai beres</h2>
            <ol>
                @foreach ($langkah as [$judul, $isi])
                    <li><h3>{{ $judul }}</h3><p>{{ $isi }}</p></li>
                @endforeach
            </ol>
        </div>
    </section>

    {{-- TESTIMONI --}}
    <section class="jk-sec">
        <div class="jk-wrap jk-quote">
            <figure style="margin:0">
                <blockquote class="jk-quote__big" style="margin:0">“Teknisinya tepat waktu dan menjelaskan kerusakannya dengan jelas. Biaya sesuai penawaran, tidak ada tambahan mendadak.”</blockquote>
                <figcaption class="jk-quote__who"><strong>Ibu Ratna</strong>, Semarang</figcaption>
            </figure>
            <div class="jk-quote__small">
                <p>Sudah tiga kali pakai untuk kantor kami. Rapi dan mudah dihubungi.<span>Pak Hendra, Ungaran</span></p>
                <p>Minta bantuan sore hari, besok paginya langsung ditangani.<span>Dewi A., Demak</span></p>
            </div>
        </div>
    </section>

    {{-- FAQ --}}
    <section class="jk-sec jk-faq">
        <div class="jk-wrap">
            <h2>Pertanyaan yang sering ditanyakan</h2>
            @foreach ($faq as [$tanya, $jawab])
                <details><summary>{{ $tanya }}</summary><p>{{ $jawab }}</p></details>
            @endforeach
        </div>
    </section>

    {{-- CTA --}}
    <section class="jk-cta">
        <div class="jk-wrap">
            <h2>Masalahnya cerita ke kami, urusannya kami yang selesaikan.</h2>
            <p>Balasan dengan estimasi biaya dan jadwal biasanya masuk dalam 1 jam, Senin–Sabtu pukul 08.00–20.00.</p>
            <a class="jk-btn jk-btn--blue" href="{{ $wa('Halo, saya butuh bantuan.') }}" target="_blank" rel="noopener">Chat WhatsApp sekarang</a>
        </div>
    </section>

</div>

@endsection