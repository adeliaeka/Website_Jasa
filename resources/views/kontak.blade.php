
@extends('layouts.app')

@section('title', 'Kontak')

@section('content')

<style>
    :root {
        --dark: #100D27;
        --card: #211B46;
        --card-hover: #2B2358;
        --purple: #813CF2;
        --purple-light: #A78BFA;
        --text-light: #FFFFFF;
        --text-muted: #C4B5FD;
    }

    body {
        background: var(--dark);
    }

    .contact-page {
        background: var(--dark);
        color: var(--text-light);
        min-height: 100vh;
        padding-bottom: 70px;
    }

    /* HERO */
    .contact-hero {
        background: linear-gradient(135deg, #171135, #30205E);
        padding: 85px 20px;
        text-align: center;
        position: relative;
        overflow: hidden;
    }

    .contact-hero::before,
    .contact-hero::after {
        content: "";
        position: absolute;
        width: 250px;
        height: 250px;
        border: 1px solid rgba(167, 139, 250, .2);
        border-radius: 50%;
    }

    .contact-hero::before {
        top: -120px;
        right: -60px;
    }

    .contact-hero::after {
        bottom: -160px;
        left: -70px;
    }

    .hero-label {
        display: inline-block;
        padding: 10px 25px;
        border: 1px solid rgba(167, 139, 250, .5);
        border-radius: 30px;
        color: var(--purple-light);
        background: rgba(129, 60, 242, .12);
        font-size: 13px;
        font-weight: 700;
        letter-spacing: 2px;
    }

    .contact-hero h1 {
        font-size: clamp(35px, 5vw, 58px);
        font-weight: 800;
        margin: 25px 0;
        line-height: 1.2;
    }

    .contact-hero h1 span {
        color: var(--purple-light);
    }

    .contact-hero p {
        color: var(--text-muted);
        max-width: 750px;
        margin: auto;
        font-size: 17px;
        line-height: 1.8;
    }

    /* SECTION */
    .contact-section {
        padding-top: 65px;
    }

    .section-title {
        color: white;
        font-size: 32px;
        font-weight: 800;
        text-align: center;
        margin-bottom: 12px;
    }

    .section-description {
        text-align: center;
        color: var(--text-muted);
        margin-bottom: 35px;
    }

    /* CONTACT CARDS */
    .contact-card {
        background: var(--card);
        border: 1px solid rgba(167, 139, 250, .15);
        border-radius: 24px;
        padding: 30px;
        height: 100%;
        transition: .3s ease;
    }

    .contact-card:hover {
        transform: translateY(-8px);
        background: var(--card-hover);
        border-color: var(--purple-light);
        box-shadow: 0 15px 35px rgba(0, 0, 0, .2);
    }

    .contact-icon {
        width: 65px;
        height: 65px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: rgba(129, 60, 242, .18);
        border-radius: 18px;
        font-size: 30px;
        margin-bottom: 25px;
    }

    .contact-card h4 {
        color: white;
        font-size: 22px;
        font-weight: 800;
        margin-bottom: 15px;
    }

    .contact-card p {
        color: var(--text-muted);
        line-height: 1.8;
        min-height: 55px;
    }

    .contact-detail {
        color: var(--purple-light);
        font-weight: 700;
        margin-bottom: 20px;
        display: block;
    }

    /* BUTTON */
    .btn-purple {
        display: inline-block;
        width: 100%;
        padding: 14px 20px;
        border-radius: 30px;
        border: none;
        background: var(--purple);
        color: white;
        font-weight: 700;
        text-align: center;
        text-decoration: none;
        transition: .3s;
        cursor: pointer;
    }

    .btn-purple:hover {
        background: #A855F7;
        color: white;
        transform: translateY(-2px);
    }

    /* FORM */
    .form-wrapper {
        background: var(--card);
        border: 1px solid rgba(167, 139, 250, .15);
        border-radius: 24px;
        padding: 35px;
    }

    .form-wrapper h3 {
        color: white;
        font-weight: 800;
        margin-bottom: 10px;
    }

    .form-wrapper > p {
        color: var(--text-muted);
        margin-bottom: 30px;
    }

    .form-label {
        color: white;
        font-weight: 600;
        margin-bottom: 9px;
    }

    .form-control {
        background: #171333;
        color: white;
        border: 1px solid #40356D;
        border-radius: 12px;
        padding: 13px 15px;
        margin-bottom: 20px;
    }

    .form-control::placeholder {
        color: #968BB8;
    }

    .form-control:focus {
        background: #171333;
        color: white;
        border-color: var(--purple-light);
        box-shadow: 0 0 0 .2rem rgba(129, 60, 242, .2);
    }

    /* FAQ */
    .faq-card {
        background: var(--card);
        border: 1px solid rgba(167, 139, 250, .15);
        border-radius: 16px;
        padding: 23px;
        height: 100%;
        transition: .3s;
    }

    .faq-card:hover {
        border-color: var(--purple-light);
        background: var(--card-hover);
    }

    .faq-card h5 {
        color: white;
        font-weight: 700;
        font-size: 17px;
    }

    .faq-card p {
        color: var(--text-muted);
        line-height: 1.7;
        margin-bottom: 0;
    }

    /* CTA */
    .contact-cta {
        background: linear-gradient(135deg, #30205E, #6D28D9);
        border-radius: 24px;
        padding: 45px 25px;
        text-align: center;
        margin-top: 65px;
    }

    .contact-cta h3 {
        color: white;
        font-weight: 800;
        margin-bottom: 15px;
    }

    .contact-cta p {
        color: #E9D5FF;
        margin-bottom: 25px;
    }

    .btn-white {
        display: inline-block;
        background: white;
        color: #6D28D9;
        padding: 13px 30px;
        border-radius: 30px;
        text-decoration: none;
        font-weight: 800;
        transition: .3s;
    }

    .btn-white:hover {
        background: #E9D5FF;
        color: #4C1D95;
    }

    /* RESPONSIVE */
    @media (max-width: 768px) {
        .contact-hero {
            padding: 65px 20px;
        }

        .contact-hero p {
            font-size: 15px;
        }

        .section-title {
            font-size: 26px;
        }

        .contact-card {
            padding: 25px;
        }

        .form-wrapper {
            padding: 23px;
        }
    }
</style>

<div class="contact-page">

    <!-- HERO SECTION -->
    <section class="contact-hero">
        <div class="hero-label">
            HUBUNGI JASAKITA
        </div>

        <h1>
            Ada yang Bisa Kami<br>
            <span>Bantu Hari Ini?</span>
        </h1>

        <p>
            Kami siap membantu kebutuhan jasa Anda.
            Sampaikan pertanyaan, konsultasi, atau kebutuhan
            layanan Anda kepada tim JasaKita.
        </p>
    </section>

    <div class="container">

        <!-- INFORMASI KONTAK -->
        <section class="contact-section">

            <h2 class="section-title">Hubungi Tim Kami</h2>

            <p class="section-description">
                Pilih cara komunikasi yang paling nyaman untuk Anda.
            </p>

            <div class="row g-4">

                <!-- WHATSAPP -->
                <div class="col-md-4">
                    <div class="contact-card">
                        <div class="contact-icon">📱</div>

                        <h4>WhatsApp</h4>

                        <p>
                            Konsultasi langsung dengan tim kami
                            untuk mendapatkan informasi layanan
                            dan pemesanan jasa.
                        </p>

                        <span class="contact-detail">
                            Respon lebih cepat
                        </span>

                        <a href="https://wa.me/6281234567890"
                           target="_blank"
                           rel="noopener noreferrer"
                           class="btn-purple">
                            Chat Sekarang
                        </a>
                    </div>
                </div>

                <!-- EMAIL -->
                <div class="col-md-4">
                    <div class="contact-card">
                        <div class="contact-icon">✉️</div>

                        <h4>Email</h4>

                        <p>
                            Kirim pertanyaan, saran, atau
                            kebutuhan kerja sama melalui
                            alamat email kami.
                        </p>

                        <span class="contact-detail">
                            Kirim pesan kapan saja
                        </span>

                        <a href="mailto:email@contoh.com"
                           class="btn-purple">
                            Kirim Email
                        </a>
                    </div>
                </div>

                <!-- LOKASI -->
                <div class="col-md-4">
                    <div class="contact-card">
                        <div class="contact-icon">📍</div>

                        <h4>Lokasi Kami</h4>

                        <p>
                            Temukan lokasi dan informasi
                            petunjuk arah melalui Google Maps.
                        </p>

                        <span class="contact-detail">
                            Temukan lokasi kami
                        </span>

                        <a href="https://www.google.com/maps"
                           target="_blank"
                           rel="noopener noreferrer"
                           class="btn-purple">
                            Lihat Lokasi
                        </a>
                    </div>
                </div>

            </div>
        </section>

        <!-- FORM PESAN -->
        <section class="contact-section">

            <div class="row justify-content-center">

                <div class="col-lg-8">

                    <div class="form-wrapper">

                        <h3 class="text-center">
                            Kirim Pesan kepada Kami
                        </h3>

                        <p class="text-center">
                            Isi formulir berikut untuk menghubungi
                            tim JasaKita melalui WhatsApp.
                        </p>

                        <form id="contactForm">

                            <label class="form-label">
                                Nama Lengkap
                            </label>

                            <input type="text"
                                   id="nama"
                                   class="form-control"
                                   placeholder="Masukkan nama lengkap"
                                   required>

                            <label class="form-label">
                                Email
                            </label>

                            <input type="email"
                                   id="email"
                                   class="form-control"
                                   placeholder="Masukkan alamat email"
                                   required>

                            <label class="form-label">
                                Subjek
                            </label>

                            <input type="text"
                                   id="subjek"
                                   class="form-control"
                                   placeholder="Contoh: Konsultasi layanan"
                                   required>

                            <label class="form-label">
                                Pesan
                            </label>

                            <textarea id="pesan"
                                      class="form-control"
                                      rows="5"
                                      placeholder="Tuliskan kebutuhan Anda..."
                                      required></textarea>

                            <button type="submit" class="btn-purple">
                                Kirim Pesan melalui WhatsApp →
                            </button>

                        </form>

                    </div>

                </div>

            </div>
        </section>

        <!-- FAQ -->
        <section class="contact-section">

            <h2 class="section-title">
                Pertanyaan yang Sering Diajukan
            </h2>

            <p class="section-description">
                Temukan jawaban dari beberapa pertanyaan berikut.
            </p>

            <div class="row g-4">

                <div class="col-md-6">
                    <div class="faq-card">
                        <h5>01. Bagaimana cara memesan jasa?</h5>
                        <p>
                            Pilih layanan yang dibutuhkan,
                            kemudian hubungi penyedia jasa
                            melalui informasi kontak yang tersedia.
                        </p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="faq-card">
                        <h5>02. Apakah bisa konsultasi dahulu?</h5>
                        <p>
                            Tentu. Anda dapat bertanya dan
                            berkonsultasi sebelum melakukan
                            pemesanan layanan.
                        </p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="faq-card">
                        <h5>03. Bagaimana mengetahui harga jasa?</h5>
                        <p>
                            Harga dapat disesuaikan dengan
                            jenis layanan dan kebutuhan Anda.
                            Silakan hubungi penyedia jasa.
                        </p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="faq-card">
                        <h5>04. Bagaimana jika ada kendala?</h5>
                        <p>
                            Anda dapat menghubungi tim kami
                            untuk menyampaikan pertanyaan
                            maupun kendala yang dialami.
                        </p>
                    </div>
                </div>

            </div>

        </section>

        <!-- CTA -->
        <section class="contact-cta">

            <h3>Siap Menemukan Solusi Terbaik?</h3>

            <p>
                Jangan ragu untuk menghubungi kami.
                Kami siap membantu kebutuhan jasa Anda.
            </p>

            <a href="https://wa.me/6281234567890"
               target="_blank"
               rel="noopener noreferrer"
               class="btn-white">
                Hubungi JasaKita Sekarang
            </a>

        </section>

    </div>
</div>

<!-- SCRIPT FORM WHATSAPP -->
<script>
    document.getElementById('contactForm').addEventListener('submit', function(e) {

        e.preventDefault();

        const nama = document.getElementById('nama').value.trim();
        const email = document.getElementById('email').value.trim();
        const subjek = document.getElementById('subjek').value.trim();
        const pesan = document.getElementById('pesan').value.trim();

        const nomorWhatsApp = "6281234567890";

        const teks =
            "Halo JasaKita, saya ingin menghubungi Anda.\n\n" +
            "Nama: " + nama + "\n" +
            "Email: " + email + "\n" +
            "Subjek: " + subjek + "\n" +
            "Pesan: " + pesan;

        const url = "https://wa.me/" + nomorWhatsApp +
                    "?text=" + encodeURIComponent(teks);

        window.open(url, "_blank");

    });
</script>

@endsection
