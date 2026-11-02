<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan - JasaKita</title>

    <style>
        :root {
            --nav: #1F2937;
            --hero-1: #2A1F55;
            --hero-2: #1E1840;
            --bg-gelap: #12122A;
            --kartu: #1E1B3A;
            --garis: #2F2B5C;
            --aksen: #8B5CF6;
            --aksen-terang: #A78BFA;
            --teks: #E5E7EB;
            --teks-redup: #CBD5E1;
        }

        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background: #FFFFFF;
            color: var(--teks);
        }

        /* NAVIGASI */
        nav {
            background: var(--nav);
            padding: 0 30px;
            height: 48px;
            display: flex;
            align-items: center;
            gap: 24px;
        }

        nav a {
            color: white;
            text-decoration: none;
            font-size: 16px;
            transition: 0.3s;
        }

        nav a:hover {
            color: var(--aksen-terang);
        }

        /* PEMBUNGKUS */
        .wrapper {
            margin: 30px;
            background: var(--bg-gelap);
        }

        /* HERO */
        .hero {
            background: linear-gradient(135deg, var(--hero-1), var(--hero-2));
            text-align: center;
            padding: 80px 20px;
        }

        .label {
            color: var(--aksen-terang);
            font-size: 14px;
            font-weight: bold;
            letter-spacing: 2px;
            text-transform: uppercase;
            margin: 0 0 15px;
        }

        .hero h1 {
            margin: 0 0 20px;
            font-size: 44px;
            color: white;
        }

        .hero h1 span {
            color: var(--aksen);
        }

        .hero p.deskripsi {
            max-width: 700px;
            margin: 0 auto;
            line-height: 1.9;
            color: var(--teks-redup);
            font-size: 16px;
        }

        /* KONTEN */
        .container {
            max-width: 1100px;
            margin: 0 auto;
            padding: 70px 20px;
        }

        .judul {
            text-align: center;
            color: white;
            font-size: 28px;
            margin: 0 0 10px;
        }

        .sub {
            text-align: center;
            margin: 0 0 35px;
            color: var(--teks-redup);
            line-height: 1.6;
        }

        /* KARTU LAYANAN */
        .layanan {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 20px;
        }

        .card {
            background: var(--kartu);
            padding: 25px;
            border-radius: 16px;
            text-align: center;
            border: 1px solid var(--garis);
            transition: transform 0.3s, border-color 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
            border-color: var(--aksen);
        }

        .icon {
            width: 65px;
            height: 65px;
            margin: 0 auto 15px;
            background: #2B2560;
            border: 1px solid var(--aksen);
            border-radius: 50%;
            font-size: 30px;
            line-height: 63px;
        }

        .icon.lain {
            background: var(--aksen);
            color: white;
        }

        .card h3 {
            margin: 10px 0;
            color: white;
            font-size: 19px;
        }

        .card p {
            line-height: 1.6;
            font-size: 14px;
            color: var(--teks-redup);
            margin: 0 0 10px;
        }

        .card p.harga {
            color: var(--aksen-terang);
            font-weight: bold;
            font-size: 16px;
        }

        /* KEUNGGULAN */
        .keunggulan {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(170px, 1fr));
            gap: 15px;
            margin-top: 25px;
        }

        .keunggulan div {
            background: var(--kartu);
            border-left: 5px solid var(--aksen);
            padding: 18px;
            border-radius: 10px;
            line-height: 1.6;
            color: var(--teks-redup);
            font-size: 14px;
        }

        .keunggulan strong {
            color: white;
            font-size: 15px;
        }

        /* TOMBOL AJAKAN */
        .cta {
            text-align: center;
            margin-top: 60px;
            background: linear-gradient(135deg, var(--hero-1), var(--aksen));
            padding: 40px 20px;
            border-radius: 16px;
        }

        .cta h2 {
            margin: 0 0 10px;
            color: white;
        }

        .cta p {
            line-height: 1.6;
            color: #EDE9FE;
            margin: 0 0 15px;
        }

        .tombol {
            display: inline-block;
            background: white;
            color: var(--hero-2);
            padding: 12px 28px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: bold;
            transition: 0.3s;
        }

        .tombol:hover {
            background: #EDE9FE;
            transform: translateY(-2px);
        }

        /* FOOTER */
        footer {
            background: var(--nav);
            color: var(--teks-redup);
            text-align: center;
            padding: 18px;
        }

        footer p {
            margin: 0;
            font-size: 14px;
        }

        /* RESPONSIVE */
        @media (max-width: 600px) {
            nav {
                padding: 0 15px;
                gap: 16px;
                overflow-x: auto;
            }

            .wrapper {
                margin: 15px;
            }

            .hero {
                padding: 50px 15px;
            }

            .hero h1 {
                font-size: 30px;
            }

            .container {
                padding: 40px 15px;
            }

            .layanan {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>

    <nav>
        <a href="/">Beranda</a>
        <a href="/layanan">Layanan</a>
        <a href="/tentang">Tentang</a>
        <a href="/kontak">Kontak</a>
    </nav>

    <div class="wrapper">

        <section class="hero">
            <p class="label">Layanan JasaKita</p>
            <h1>Layanan <span>Kami</span></h1>
            <p class="deskripsi">
                Butuh jasa tapi sulit mencari? Pilih kategori jasa yang Anda butuhkan,
                dan temukan penyedia jasa terpercaya di sekitar Anda dengan mudah.
            </p>
        </section>

        <div class="container">

            <h2 class="judul">Pilih Kategori Jasa</h2>
            <p class="sub">Harga yang tertera adalah estimasi awal.</p>

            <div class="layanan">

                <div class="card">
                    <div class="icon">❄️</div>
                    <h3>Servis AC</h3>
                    <p>Cuci, perbaikan, dan pemasangan AC oleh teknisi berpengalaman.</p>
                    <p class="harga">Mulai Rp75.000</p>
                </div>