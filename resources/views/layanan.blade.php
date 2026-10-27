<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Platform Jasa Lokal</title>

    <style>
        :root {
            --teal: #0f7b7f;
            --teal-dark: #0b3a45;
            --amber: #f5a623;
        }

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background: #f2f8f8;
            color: #333;
        }

        header {
            background: var(--teal-dark);
            color: white;
            padding: 30px 20px;
            text-align: center;
        }

        nav {
            background: var(--teal);
            padding: 15px;
            text-align: center;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 12px;
        }

        .container {
            max-width: 1000px;
            margin: 40px auto;
            padding: 20px;
        }

        h2.judul {
            text-align: center;
            color: var(--teal-dark);
        }

        .sub {
            text-align: center;
            margin-bottom: 30px;
        }

        .layanan {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 20px;
        }

        .card {
            background: white;
            padding: 25px;
            border-radius: 12px;
            text-align: center;
            box-shadow: 0 2px 8px rgba(0, 0, 0, .1);
        }

        .icon {
            width: 60px;
            height: 60px;
            margin: 0 auto 12px;
            background: var(--teal);
            border-radius: 50%;
            font-size: 28px;
            line-height: 60px;
        }

        .icon.lain {
            background: var(--amber);
            color: white;
        }

        .card h3 {
            margin: 10px 0;
            color: var(--teal-dark);
        }

        .harga {
            color: var(--teal);
            font-weight: bold;
        }

        .keunggulan {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(170px, 1fr));
            gap: 15px;
            margin-top: 20px;
        }

        .keunggulan div {
            background: white;
            border-left: 5px solid var(--teal);
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, .08);
        }

        .cta {
            text-align: center;
            margin-top: 45px;
            background: var(--teal);
            color: white;
            padding: 30px;
            border-radius: 12px;
        }

        .tombol {
            display: inline-block;
            background: var(--amber);
            color: white;
            padding: 12px 22px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: bold;
        }

        footer {
            background: var(--teal-dark);
            color: white;
            text-align: center;
            padding: 15px;
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
    <p class="sub">Butuh jasa tapi sulit mencari? Pilih kategori jasa yang Anda butuhkan.</p>

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

    <h2 class="judul" style="margin-top:50px;">Kenapa Memilih Platform Ini?</h2>
    <div class="keunggulan">
        <div><strong>Jasa Sesuai</strong><br>Mudah menemukan penyedia jasa yang cocok.</div>
        <div><strong>Harga Jelas</strong><br>Ketahui estimasi harga sebelum memesan.</div>
        <div><strong>Kualitas Terpercaya</strong><br>Lihat rating dan ulasan penyedia jasa.</div>
        <div><strong>Jadwal Fleksibel</strong><br>Tentukan jadwal pengerjaan sesuai waktu Anda.</div>
        <div><strong>Dekat Lokasi</strong><br>Temukan penyedia jasa di sekitar Anda.</div>
    </div>

    <div class="cta">
        <h2>Butuh Jasa Sekarang?</h2>
        <p>Pesan jasa dengan mudah atau daftar sebagai penyedia jasa.</p>
        <a href="/kontak" class="tombol">Cari Jasa</a>
    </div>
</div>

<footer>
    <p>&copy; {{ date('Y') }} Platform Jasa Lokal. Semua Hak Dilindungi.</p>
</footer>

</body>
</html>