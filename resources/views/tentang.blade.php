@extends('layouts.app')

@section('title', 'Tentang Kami')

@section('content')

<style>
    .tentang {
        background: #101326;
        color: white;
        font-family: Arial, sans-serif;
        padding-bottom: 70px;
    }

    .tentang-hero {
        padding: 80px 8%;
        text-align: center;
        background: linear-gradient(135deg, #191632, #28204d);
    }

    .tentang-hero .label {
        color: #b7a8ff;
        font-size: 13px;
        letter-spacing: 2px;
        font-weight: bold;
    }

    .tentang-hero h1 {
        font-size: 45px;
        margin: 20px 0;
    }

    .tentang-hero h1 span {
        color: #9580ff;
    }

    .tentang-hero p {
        max-width: 700px;
        margin: auto;
        color: #c0c2d6;
        line-height: 1.9;
        font-size: 15px;
    }

    .tentang-profil {
        max-width: 1100px;
        margin: auto;
        padding: 65px 30px;
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 40px;
        align-items: center;
    }
.tentang-profil h2 {
        font-size: 29px;
        margin-bottom: 20px;
    }

    .tentang-profil p {
        color: #b9bdd2;
        font-size: 14px;
        line-height: 1.9;
        margin-bottom: 15px;
        text-align: justify;
    }

    .profil-card {
        padding: 40px 25px;
        border: 1px solid #ffffff18;
        border-radius: 20px;
        background: linear-gradient(145deg, #292449, #191a31);
        text-align: center;
    }

    .profil-card .ikon {
        font-size: 75px;
        margin-bottom: 20px;
    }

    .profil-card h3 {
        font-size: 25px;
        color: #b5a4ff;
        margin-bottom: 12px;
    }

    .profil-card p {
        text-align: center;
    }

    .tentang-nilai {
        padding: 45px 8%;
        background: #171a30;
    }

    .tentang-nilai h2 {
        text-align: center;
        font-size: 30px;
        margin-bottom: 35px;
    }

    .nilai-grid {
        max-width: 1100px;
        margin: auto;
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 22px;
    }
    .nilai-card {
        background: #222540;
        border: 1px solid #ffffff12;
        border-radius: 15px;
        padding: 28px;
        transition: .3s;
    }

    .nilai-card:hover {
        transform: translateY(-5px);
        border-color: #9580ff;
    }

    .nilai-card .ikon {
        font-size: 35px;
        margin-bottom: 15px;
    }

    .nilai-card h3 {
        color: #b5a4ff;
        margin-bottom: 12px;
    }

    .nilai-card p {
        color: #b9bdd2;
        font-size: 14px;
        line-height: 1.8;
    }

    .tentang-cta {
        text-align: center;
        padding: 65px 8% 0;
    }

    .tentang-cta h2 {
        font-size: 30px;
        margin-bottom: 15px;
    }

    .tentang-cta p {
        color: #b9bdd2;
        margin-bottom: 25px;
        line-height: 1.8;
    }

    .tentang-cta a {
        display: inline-block;
        background: #7657ff;
        color: white;
        text-decoration: none;
        padding: 14px 25px;
        border-radius: 9px;
        font-weight: bold;
    }

    .tentang-cta a:hover {
        background: #927aff;
    }
@media (max-width: 700px) {
        .tentang-hero h1 {
            font-size: 32px;
        }

        .tentang-profil {
            grid-template-columns: 1fr;
            padding: 45px 6%;
        }

        .nilai-grid {
            grid-template-columns: 1fr;
        }

        .tentang-nilai {
            padding: 40px 6%;
        }
    }
</style>

<div class="tentang">

    <section class="tentang-hero">
        <span class="label">ABOUT JASAKITA</span>

        <h1>
            Mengenal <span>JasaKita</span>
        </h1>

        <p>
            JasaKita adalah website layanan jasa online yang membantu
            pengunjung menemukan berbagai layanan digital dengan lebih
            mudah. Kami hadir untuk memberikan informasi layanan yang
            praktis, jelas, dan sesuai dengan kebutuhan.
        </p>
    </section>

    <section class="tentang-profil">
        <div>
            <h2>Siapa Kami?</h2>

            <p>
                JasaKita menyediakan berbagai pilihan layanan, mulai
                dari desain grafis, pembuatan website, pengetikan
                dokumen, desain presentasi, pengelolaan media sosial,
                hingga edit foto.
            </p>

            <p>
                Melalui website ini, pengunjung dapat melihat jenis
                layanan, mengetahui harga awal, dan menghubungi
                penyedia jasa untuk menanyakan kebutuhan mereka.
            </p>

            <p>
                Kami ingin membuat proses pencarian jasa menjadi
                lebih sederhana melalui teknologi dan tampilan
                website yang mudah digunakan.
            </p>
        </div>

        <div class="profil-card">
            <div class="ikon">💻</div>
            <h3>JasaKita</h3>
            <p>
                Solusi layanan digital yang praktis untuk berbagai
                kebutuhan pribadi maupun bisnis.
            </p>
        </div>
    </section>

    <section class="tentang-nilai">
        <h2>Visi dan Misi Kami</h2>

        <div class="nilai-grid">

            <div class="nilai-card">
                <div class="ikon">🎯</div>
                <h3>Visi</h3>
                <p>
                    Menjadi platform layanan jasa yang mudah diakses,
                    informatif, dan membantu memenuhi kebutuhan
                    digital masyarakat.
                </p>
            </div>

            <div class="nilai-card">
                <div class="ikon">🚀</div>
                <h3>Misi</h3>
                <p>
                    Menyediakan pilihan jasa yang beragam, informasi
                    harga yang jelas, serta proses pemesanan yang
                    praktis dan nyaman.
                </p>
            </div>

            <div class="nilai-card">
                <div class="ikon">⭐</div>
                <h3>Keunggulan</h3>
                <p>
                    Memiliki tampilan modern, navigasi sederhana,
                    dan pilihan layanan yang dapat disesuaikan
                    dengan kebutuhan pengunjung.
                </p>
            </div>

        </div>
    </section>

    <section class="tentang-cta">
        <h2>Butuh Layanan Jasa?</h2>

        <p>
            Temukan layanan yang sesuai dengan kebutuhanmu
            melalui JasaKita.
        </p>

        <a href="{{ url('/layanan') }}">
            Lihat Layanan →
        </a>
    </section>

</div>

@endsection