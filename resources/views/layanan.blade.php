```php
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan - Platform Jasa Lokal</title>

    <style>
        :root {
            --ungu: #4C1D95;
            --ungu-tua: #240046;
            --ungu-gelap: #18002F;
            --ungu-muda: #7C3AED;
            --lavender: #F3E8FF;
            --putih: #FFFFFF;
        }

        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background: var(--lavender);
            color: #333333;
        }

        /* HEADER */
        header {
            background: linear-gradient(
                135deg,
                var(--ungu-gelap),
                var(--ungu-tua)
            );
            color: white;
            padding: 35px 20px;
            text-align: center;
        }

        header h1 {
            margin: 0 0 10px;
            font-size: 32px;
        }

        header p {
            margin: 0;
            color: #E9D5FF;
        }

        /* NAVIGASI */
        nav {
            background: var(--ungu);
            padding: 16px 10px;
            text-align: center;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 12px;
            font-weight: bold;
            display: inline-block;
            transition: 0.3s;
        }

        nav a:hover {
            color: #D8B4FE;
        }

        /* CONTAINER */
        .container {
            max-width: 1100px;
            margin: 40px auto;
            padding: 20px;
        }

        .judul {
            text-align: center;
            color: var(--ungu-tua);
        }

        .sub {
            text-align: center;
            margin-bottom: 30px;
            color: #555555;
            line-height: 1.6;
        }

        /* KARTU LAYANAN */
        .layanan {
            display: grid;
            grid-template-columns: repeat(
                auto-fit,
                minmax(220px, 1fr)
            );
            gap: 20px;
        }

        .card {
            background: var(--putih);
            padding: 25px;
            border-radius: 14px;
            text-align: center;
            border: 1px solid #DDD6FE;
            box-shadow: 0 4px 12px rgba(36, 0, 70, 0.12);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(36, 0, 70, 0.2);
        }

        .icon {
            width: 65px;
            height: 65px;
            margin: 0 auto 15px;
            background: var(--ungu-tua);
            color: white;
            border-radius: 50%;
            font-size: 30px;
            line-height: 65px;
        }

        .icon.lain {
            background: var(--ungu-muda);
            color: white;
        }

        .card h3 {
            margin: 10px 0;
            color: var(--ungu-tua);
            font-size: 19px;
        }

        .card p {
            line-height: 1.6;
            font-size: 14px;
        }

        .harga {
            color: var(--ungu);
            font-weight: bold;
            font-size: 16px !important;
        }

        /* KEUNGGULAN */
        .keunggulan {
            display: grid;
            grid-template-columns: repeat(
                auto-fit,
                minmax(170px, 1fr)
            );
            gap: 15px;
            margin-top: 20px;
        }

        .keunggulan div {
            background: white;
            border-left: 5px solid var(--ungu);
            padding: 18px;
            border-radius: 8px;
            box-shadow: 0 3px 10px rgba(36, 0, 70, 0.1);
            line-height: 1.6;
        }

        .keunggulan strong {
            color: var(--ungu-tua);
        }

        /* TOMBOL AJAKAN */
        .cta {
            text-align: center;
            margin-top: 45px;
            background: linear-gradient(
                135deg,
                var(--ungu-gelap),
                var(--ungu)
            );
            color: white;
            padding: 35px 20px;
            border-radius: 14px;
            box-shadow: 0 5px 15px rgba(36, 0, 70, 0.2);
        }

        .cta h2 {
            margin-top: 0;
        }

        .cta p {
            line-height: 1.6;
        }

        .tombol {
            display: inline-block;
            background: #E9D5FF;
            color: var(--ungu-tua);
            padding: 12px 25px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: bold;
            margin-top: 10px;
            transition: 0.3s;
        }

        .tombol:hover {
            background: white;
            transform: translateY(-2px);
        }

        /* FOOTER */
        footer {
            background: var(--ungu-gelap);
            color: white;
            text-align: center;
            padding: 18px;
            margin-top: 30px;
        }

        footer p {
            margin: 0;
        }

        /* RESPONSIVE */
        @media (max-width: 600px) {
            header h1 {
                font-size: 25px;
            }

            nav a {
                margin: 7px;
            }

            .container {
                margin: 20px auto;
                padding: 15px;
            }

            .layanan {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>

    <header>
        <h1>Platform Jasa Lokal</h1>
        <p>Temukan penyedia jasa terpercaya di sekitar Anda dengan mudah</p>
    </header>

    <nav>
        <a href="/">Beranda</a>
        <a href="/layanan">Layanan</a>
        <a href="/tentang">Tentang</a>
        <a href="/kontak">Kontak</a>
    </nav>

    <div class="container">

        <h2 class="judul">Layanan Kami</h2>

        <p class="sub">
            Butuh jasa tapi sulit mencari?
            Pilih kategori jasa yang Anda butuhkan.
        </p>

        <div class="layanan">

            <div class="card">
                <div class="icon">❄️</div>
                <h3>Servis AC</h3>
                <p>Cuci, perbaikan, dan pemasangan AC oleh teknisi berpengalaman.</p>
                <p class="harga">Mulai Rp75.000</p>
            </div>

            <div class="card">
                <div class="icon">⚡</div>
                <h3>Tukang Listrik</h3>
                <p>Instalasi, perbaikan korsleting, dan pemasangan lampu atau stopkontak.</p>
                <p class="harga">Mulai Rp50.000</p>
            </div>

            <div class="card">
                <div class="icon">💻</div>
                <h3>Servis Laptop / Komputer</h3>
                <p>Perbaikan hardware, instal ulang, dan pembersihan perangkat.</p>
                <p class="harga">Mulai Rp100.000</p>
            </div>

            <div class="card">
                <div class="icon">🧹</div>
                <h3>Cleaning Service</h3>
                <p>Pembersihan rumah, kantor, dan kos secara rapi dan menyeluruh.</p>
                <p class="harga">Mulai Rp150.000</p>
            </div>

            <div class="card">
                <div class="icon">📷</div>
                <h3>Fotografer</h3>
                <p>Foto acara, produk, wisuda, hingga pernikahan.</p>
                <p class="harga">Mulai Rp300.000</p>
            </div>

            <div class="card">
                <div class="icon">💄</div>
                <h3>Makeup Artist</h3>
                <p>Rias wajah untuk wisuda, pesta, dan acara spesial lainnya.</p>
                <p class="harga">Mulai Rp200.000</p>
            </div>

            <div class="card">
                <div class="icon">🌳</div>
                <h3>Perawatan Taman</h3>
                <p>Pemangkasan, penanaman, dan perawatan taman rumah atau kantor.</p>
                <p class="harga">Mulai Rp100.000</p>
            </div>

            <div class="card">
                <div class="icon lain">＋</div>
                <h3>Dan Lainnya...</h3>
                <p>Masih banyak kategori jasa lain yang terus kami tambahkan.</p>
                <p class="harga">Segera hadir</p>
            </div>

        </div>

        <h2 class="judul" style="margin-top: 50px;">
            Kenapa Memilih Platform Ini?
        </h2>

        <div class="keunggulan">

            <div>
                <strong>Jasa Sesuai</strong><br>
                Mudah menemukan penyedia jasa yang cocok.
            </div>

            <div>
                <strong>Harga Jelas</strong><br>
                Ketahui estimasi harga sebelum memesan.
            </div>

            <div>
                <strong>Kualitas Terpercaya</strong><br>
                Lihat rating dan ulasan penyedia jasa.
            </div>

            <div>
                <strong>Jadwal Fleksibel</strong><br>
                Tentukan jadwal pengerjaan sesuai waktu Anda.
            </div>

            <div>
                <strong>Dekat Lokasi</strong><br>
                Temukan penyedia jasa di sekitar Anda.
            </div>

        </div>

        <div class="cta">
            <h2>Butuh Jasa Sekarang?</h2>
            <p>Pesan jasa dengan mudah atau daftar sebagai penyedia jasa.</p>
            <a href="/kontak" class="tombol">Cari Jasa</a>
        </div>

    </div>

    <footer>
        <p>&copy; <?= date('Y') ?> Platform Jasa Lokal. Semua Hak Dilindungi.</p>
    </footer>

</body>
</html>
```