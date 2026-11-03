@extends('layouts.app')

@section('title', 'Tentang Kami')

@section('content')

<style>
    .tentang {
        background: #101326;
        color: #fff;
        font-family: Arial, sans-serif;
        overflow: hidden;
    }

    /* HERO SECTION */
    .about-hero {
        position: relative;
        padding: 110px 8%;
        text-align: center;
        background:
            radial-gradient(circle at 20% 20%, #7657ff35, transparent 35%),
            radial-gradient(circle at 80% 80%, #9580ff25, transparent 30%),
            linear-gradient(135deg, #191632, #28204d);
    }

    .about-hero::before {
        content: "";
        position: absolute;
        width: 300px;
        height: 300px;
        border: 1px solid #9580ff30;
        border-radius: 50%;
        top: -150px;
        right: -80px;
    }
.hero-label {
        display: inline-block;
        color: #c0b3ff;
        background: #9580ff20;
        border: 1px solid #9580ff50;
        padding: 10px 22px;
        border-radius: 30px;
        font-size: 12px;
        letter-spacing: 2px;
        font-weight: bold;
    }

    .about-hero h1 {
        font-size: 52px;
        margin: 25px 0 18px;
        line-height: 1.2;
    }

    .about-hero h1 span {
        color: #a995ff;
    }

    .about-hero p {
        max-width: 700px;
        margin: auto;
        color: #c0c2d6;
        line-height: 1.9;
        font-size: 15px;
    }

    .hero-button {
        display: inline-block;
        margin-top: 30px;
        padding: 14px 28px;
        background: #7657ff;
        color: white;
        text-decoration: none;
        border-radius: 10px;
        font-weight: bold;
        transition: .3s;
    }

    .hero-button:hover {
        background: #9580ff;
        transform: translateY(-4px);
    }

    /* PROFIL */
    .about-profile {
        max-width: 1150px;
        margin: auto;
        padding: 90px 30px;
        display: grid;
        grid-template-columns: 1.1fr .9fr;
        gap: 65px;
        align-items: center;
    }

    .section-label {
        color: #a995ff;
        font-size: 12px;
        letter-spacing: 2px;
        font-weight: bold;
    }

    .profile-text h2 {
        font-size: 36px;
        margin: 18px 0;
    }

    .profile-text h2 span {
        color: #a995ff;
    }

    .profile-text p {
        color: #b9bdd2;
        font-size: 14px;
        line-height: 2;
        text-align: justify;
        margin-bottom: 17px;
    }

    .profile-visual {
        position: relative;
        padding: 45px 30px;
        border-radius: 25px;
        text-align: center;
        background: linear-gradient(145deg, #302858, #191a31);
        border: 1px solid #9580ff45;
        box-shadow: 0 15px 45px #00000040;
    }

    .profile-visual .big-icon {
        font-size: 90px;
        margin-bottom: 20px;
    }

    .profile-visual h3 {
        color: #b5a4ff;
        font-size: 28px;
        margin-bottom: 12px;
    }
    .profile-visual p {
        color: #c0c2d6;
        line-height: 1.8;
        font-size: 14px;
    }

    .profile-tag {
        display: inline-block;
        margin-top: 22px;
        background: #7657ff30;
        color: #c7bbff;
        padding: 9px 18px;
        border-radius: 30px;
        font-size: 12px;
    }

    /* LAYANAN */
    .about-services {
        padding: 85px 8%;
        background: #171a30;
    }

    .section-heading {
        text-align: center;
        margin-bottom: 45px;
    }

    .section-heading h2 {
        font-size: 34px;
        margin: 15px 0;
    }

    .section-heading h2 span {
        color: #a995ff;
    }

    .section-heading p {
        color: #b9bdd2;
        font-size: 14px;
        line-height: 1.8;
    }

    .service-grid {
        max-width: 1150px;
        margin: auto;
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 22px;
    }

    .service-card {
        padding: 30px 25px;
        background: linear-gradient(145deg, #252846, #1d203a);
        border: 1px solid #ffffff15;
        border-radius: 18px;
        transition: .35s;
    }

    .service-card:hover {
        transform: translateY(-8px);
        border-color: #9580ff;
        box-shadow: 0 12px 30px #7657ff20;
    }

    .service-icon {
        width: 58px;
        height: 58px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #7657ff25;
        border-radius: 15px;
        font-size: 29px;
        margin-bottom: 22px;
    }

    .service-card h3 {
        color: #c1b3ff;
        font-size: 19px;
        margin-bottom: 12px;
    }

    .service-card p {
        color: #b9bdd2;
        font-size: 13px;
        line-height: 1.8;
    }

    /* VISI MISI */
    .about-values {
        padding: 85px 8%;
    }

    .values-grid {
        max-width: 1150px;
        margin: auto;
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 22px;
    }

    .value-card {
        background: linear-gradient(145deg, #292449, #191a31);
        padding: 32px 25px;
        border-radius: 18px;
        border: 1px solid #ffffff18;
        transition: .3s;
    }

    .value-card:hover {
        transform: translateY(-7px);
        border-color: #9580ff;
    }
 .value-card .icon {
        font-size: 35px;
        margin-bottom: 20px;
    }

    .value-card h3 {
        color: #b5a4ff;
        margin-bottom: 15px;
        font-size: 21px;
    }

    .value-card p {
        color: #b9bdd2;
        font-size: 14px;
        line-height: 1.9;
    }

    /* CTA */
    .about-cta {
        margin: 30px 8% 80px;
        padding: 65px 25px;
        text-align: center;
        border-radius: 25px;
        background:
            radial-gradient(circle at top right, #9580ff45, transparent 40%),
            linear-gradient(135deg, #302858, #191632);
        border: 1px solid #9580ff45;
    }

    .about-cta h2 {
        font-size: 32px;
        margin-bottom: 15px;
    }

    .about-cta h2 span {
        color: #b5a4ff;
    }

    .about-cta p {
        color: #c0c2d6;
        font-size: 14px;
        line-height: 1.8;
        margin-bottom: 27px;
    }

    .cta-button {
        display: inline-block;
        padding: 14px 30px;
        background: #7657ff;
        color: white;
        text-decoration: none;
        border-radius: 10px;
        font-weight: bold;
        transition: .3s;
    }

    .cta-button:hover {
        background: #9580ff;
        transform: translateY(-4px);
    }

    /* RESPONSIVE */
    @media (max-width: 768px) {
        .about-hero {
            padding: 80px 6%;
        }

        .about-hero h1 {
            font-size: 35px;
        }

        .about-profile {
            grid-template-columns: 1fr;
            padding: 60px 7%;
            gap: 35px;
        }

        .profile-text h2 {
            font-size: 29px;
        }

        .service-grid,
        .values-grid {
            grid-template-columns: 1fr;
        }

        .about-services,
        .about-values {
            padding: 65px 7%;
        }

        .section-heading h2 {
            font-size: 28px;
        }

        .about-cta {
            margin: 20px 6% 60px;
        }

        .about-cta h2 {
            font-size: 26px;
        }
    }
</style>

<div class="tentang">

    <!-- HERO -->
    <section class="about-hero">
        <span class="hero-label">WELCOME TO JASAKITA</span>

        <h1>
            Solusi Digital untuk<br>
            <span>Kebutuhan Anda</span>
        </h1>

        <p>
            Kenali lebih dekat JasaKita, platform layanan jasa online
            yang hadir untuk membantu berbagai kebutuhan Anda.
            Kami menghubungkan kebutuhan dengan solusi melalui
            layanan yang praktis, mudah, dan terpercaya.
        </p>

        <a href="{{ url('/layanan') }}" class="hero-button">
            Jelajahi Layanan →
        </a>
    </section>

    <!-- PROFIL -->
    <section class="about-profile">

        <div class="profile-text">
            <span class="section-label">TENTANG KAMI</span>

            <h2>
                Lebih Dekat dengan <span>JasaKita</span>
            </h2>

            <p>
                JasaKita merupakan website layanan jasa online yang
                menyediakan berbagai pilihan layanan untuk membantu
                kebutuhan pribadi maupun bisnis.
            </p>

            <p>
                Kami menyediakan layanan seperti desain grafis,
                pembuatan website, pengetikan dokumen, desain
                presentasi, pengelolaan media sosial, hingga edit foto.
            </p>

            <p>
                Melalui JasaKita, pengunjung dapat melihat berbagai
                pilihan layanan, mengetahui informasi harga awal,
                serta menghubungi penyedia jasa dengan lebih mudah.
                Kami ingin menjadikan pencarian layanan jasa lebih
                sederhana dan efisien.
            </p>
        </div>

        <div class="profile-visual">
            <div class="big-icon">💻</div>

            <h3>JasaKita</h3>

            <p>
                Your Needs, Our Solutions.
                Memberikan kemudahan dalam menemukan layanan
                yang sesuai dengan kebutuhan Anda.
            </p>

            <span class="profile-tag">
                ✦ Creative Digital Service
            </span>
        </div>

    </section>

    <!-- LAYANAN -->
    <section class="about-services">

        <div class="section-heading">
            <span class="section-label">WHAT WE OFFER</span>

            <h2>
                Apa yang Bisa Kami <span>Bantu?</span>
            </h2>

            <p>
                Berbagai pilihan layanan untuk mendukung
                aktivitas dan kebutuhan digital Anda.
            </p>
        </div>

        <div class="service-grid">

            <div class="service-card">
                <div class="service-icon">🎨</div>
                <h3>Desain Grafis</h3>
                <p>
                    Membantu membuat desain visual menarik
                    untuk kebutuhan promosi, poster, dan lainnya.
                </p>
            </div>

            <div class="service-card">
                <div class="service-icon">💻</div>
                <h3>Pembuatan Website</h3>
                <p>
                    Menyediakan layanan pembuatan website
                    untuk kebutuhan pribadi maupun bisnis.
                </p>
            </div>

            <div class="service-card">
                <div class="service-icon">📝</div>
                <h3>Pengetikan Dokumen</h3>
                <p>
                    Membantu menyusun dan mengetik dokumen
                    agar lebih rapi dan mudah dibaca.
                </p>
            </div>

            <div class="service-card">
                <div class="service-icon">📊</div>
                <h3>Desain Presentasi</h3>
                <p>
                    Membuat tampilan presentasi yang menarik,
                    informatif, dan mudah dipahami.
                </p>
            </div>

            <div class="service-card">
                <div class="service-icon">📱</div>
                <h3>Media Sosial</h3>
                <p>
                    Membantu kebutuhan konten dan pengelolaan
                    media sosial agar terlihat lebih menarik.
                </p>
            </div>

            <div class="service-card">
                <div class="service-icon">📸</div>
                <h3>Edit Foto</h3>
                <p>
                    Membantu mengolah foto agar terlihat
                    lebih menarik sesuai kebutuhan.
                </p>
            </div>

        </div>
    </section>

    <!-- VISI MISI -->
    <section class="about-values">

        <div class="section-heading">
            <span class="section-label">OUR PRINCIPLES</span>

            <h2>
                Visi, Misi & <span>Keunggulan</span>
            </h2>

            <p>
                Tujuan dan komitmen kami dalam memberikan
                pengalaman layanan yang lebih baik.
            </p>
        </div>

        <div class="values-grid">

            <div class="value-card">
                <div class="icon">🎯</div>
                <h3>Visi</h3>
                <p>
                    Menjadi platform layanan jasa online yang
                    mudah diakses dan mampu memenuhi berbagai
                    kebutuhan digital masyarakat.
                </p>
            </div>

            <div class="value-card">
                <div class="icon">🚀</div>
                <h3>Misi</h3>
                <p>
                    Menyediakan pilihan layanan yang beragam,
                    informasi yang jelas, serta proses pencarian
                    jasa yang praktis dan nyaman.
                </p>
            </div>

            <div class="value-card">
                <div class="icon">⭐</div>
                <h3>Keunggulan</h3>
                <p>
                    Menghadirkan tampilan modern, navigasi
                    sederhana, informasi layanan yang mudah
                    dipahami, dan akses yang praktis.
                </p>
            </div>

        </div>
    </section>

    <!-- CALL TO ACTION -->
    <section class="about-cta">

        <h2>
            Siap Menemukan <span>Solusi Anda?</span>
        </h2>

        <p>
            Tidak perlu bingung mencari layanan yang sesuai.
            Temukan berbagai pilihan jasa hanya melalui JasaKita.
        </p>

        <a href="{{ url('/layanan') }}" class="cta-button">
            Lihat Semua Layanan →
        </a>

    </section>

</div>

@endsection