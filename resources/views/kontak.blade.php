
@extends('layouts.app')

@section('title', 'Kontak')

@section('content')

<style>
    :root {
        --ungu-gelap: #211A42;
        --ungu-latar: #2D2354;
        --ungu-aksen: #A78BFA;
        --ungu-tombol: #7652F5;
        --ungu-muda: #F0EAFE;
    }

    .contact-page {
        padding: 40px 0;
    }

    /* Hero */
    .hero-contact {
        background: linear-gradient(135deg, #211A42, #2D2354);
        color: white;
        padding: 85px 25px;
        text-align: center;
        border-radius: 0;
        position: relative;
        overflow: hidden;
        margin-bottom: 65px;
    }

    .hero-contact h1 {
        font-size: 48px;
        font-weight: 800;
        margin: 25px 0;
    }

    .hero-contact h1 span {
        color: var(--ungu-aksen);
    }

    .hero-contact p {
        color: #ddd6fe;
        font-size: 17px;
        line-height: 1.8;
        max-width: 750px;
        margin: auto;
    }

    .hero-label {
        display: inline-block;
        padding: 10px 28px;
        border: 1px solid #7652F5;
        border-radius: 30px;
        color: #C4B5FD;
        font-weight: bold;
        letter-spacing: 2px;
    }

    /* Judul bagian */
    .section-title {
        color: var(--ungu-gelap);
        font-weight: 800;
        text-align: center;
        margin-bottom: 12px;
    }

    .section-subtitle {
        color: #777;
        text-align: center;
        margin-bottom: 35px;
    }

    /* Kartu informasi */
    .info-card {
        background: white;
        border: 1px solid #eee;
        border-radius: 18px;
        padding: 30px 20px;
        text-align: center;
        height: 100%;
        box-shadow: 0 5px 20px rgba(33, 26, 66, 0.07);
        transition: 0.3s;
    }

    .info-card:hover {
        transform: translateY(-7px);
        box-shadow: 0 10px 25px rgba(33, 26, 66, 0.13);
    }

    .info-icon {
        width: 65px;
        height: 65px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 18px;
        background: var(--ungu-muda);
        color: var(--ungu-tombol);
        border-radius: 18px;
        font-size: 28px;
    }

    .info-card h5 {
        color: var(--ungu-gelap);
        font-weight: 700;
        margin-bottom: 12px;
    }

    .info-card p {
        color: #777;
        margin-bottom: 20px;
    }

    /* Tombol */
    .btn-purple {
        background: var(--ungu-tombol);
        color: white;
        border: none;
        padding: 11px 25px;
        border-radius: 10px;
        font-weight: 600;
        text-decoration: none;
        display: inline-block;
        transition: 0.3s;
    }

    .btn-purple:hover {
        background: var(--ungu-gelap);
        color: white;
    }

    /* Form */
    .form-card {
        background: white;
        padding: 35px;
        border-radius: 18px;
        box-shadow: 0 5px 25px rgba(33, 26, 66, 0.08);
        border: 1px solid #eee;
    }

    .form-card h3 {
        color: var(--ungu-gelap);
        font-weight: 800;
        margin-bottom: 25px;
    }

    .form-control {
        padding: 12px;
        border-radius: 9px;
        margin-bottom: 18px;
    }

    .form-control:focus {
        border-color: var(--ungu-tombol);
        box-shadow: 0 0 0 0.2rem rgba(118, 82, 245, 0.15);
    }

    /* FAQ */
    .faq-box {
        background: #F8F6FF;
        border-radius: 12px;
        padding: 20px;
        margin-bottom: 15px;
        border-left: 4px solid var(--ungu-tombol);
    }

    .faq-box h6 {
        color: var(--ungu-gelap);
        font-weight: 700;
    }

    .faq-box p {
        color: #666;
        margin-bottom: 0;
    }

    /* Tampilan HP */
    @media (max-width: 768px) {
        .hero-contact {
            padding: 60px 20px;
        }

        .hero-contact h1 {
            font-size: 34px;
        }

        .hero-contact p {
            font-size: 15px;
        }

        .form-card {
            padding: 22px;
        }
    }
</style>

<div class="contact-page">

    <!-- HERO -->
    <section class="hero-contact">
        <div class="hero-label">
            HUBUNGI JASAKITA
        </div>

        <h1>
            Mari Terhubung dengan
            <br>
            <span>Kami</span>
        </h1>

        <p>
            Kami siap membantu kebutuhan jasa Anda.
            Jangan ragu untuk menghubungi kami jika
            memiliki pertanyaan atau membutuhkan informasi
            lebih lanjut mengenai layanan JasaKita.
        </p>
    </section>

    <div class="container">

        <!-- INFORMASI KONTAK -->
        <section class="mb-5">

            <h2 class="section-title">Informasi Kontak</h2>

            <p class="section-subtitle">
                Hubungi kami melalui beberapa pilihan berikut.
            </p>

            <div class="row g-4">

                <!-- WhatsApp -->
                <div class="col-md-4">
                    <div class="info-card">
                        <div class="info-icon">📱</div>
                        <h5>WhatsApp</h5>
                        <p>
                            Konsultasi dan pemesanan jasa
                            dengan mudah melalui WhatsApp.
                        </p>
                        <a href="https://wa.me/6281234567890"
                           target="_blank"
                           rel="noopener noreferrer"
                           class="btn-purple">
                            Hubungi Kami
                        </a>
                    </div>
                </div>

                <!-- Email -->
                <div class="col-md-4">
                    <div class="info-card">
                        <div class="info-icon">✉️</div>
                        <h5>Email</h5>
                        <p>
                            Kirim pertanyaan atau pesan
                            kepada kami melalui email.
                        </p>
                        <a href="mailto:email@contoh.com"
                           class="btn-purple">
                            Kirim Email
                        </a>
                    </div>
                </div>

                <!-- Lokasi -->
                <div class="col-md-4">
                    <div class="info-card">
                        <div class="info-icon">📍</div>
                        <h5>Lokasi</h5>
                        <p>
                            Temukan lokasi kami dan
                            dapatkan petunjuk arah.
                        </p>
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

        <!-- FORM KONTAK -->
        <section class="my-5">

            <div class="row justify-content-center">

                <div class="col-lg-8">

                    <div class="form-card">

                        <h3 class="text-center">
                            Kirim Pesan kepada Kami
                        </h3>

                        <form id="contactForm">

                            <label class="form-label">
                                Nama Lengkap
                            </label>

                            <input type="text"
                                   id="nama"
                                   class="form-control"
                                   placeholder="Masukkan nama Anda"
                                   required>

                            <label class="form-label">
                                Email
                            </label>

                            <input type="email"
                                   id="email"
                                   class="form-control"
                                   placeholder="Masukkan email Anda"
                                   required>

                            <label class="form-label">
                                Subjek
                            </label>

                            <input type="text"
                                   id="subjek"
                                   class="form-control"
                                   placeholder="Masukkan subjek pesan"
                                   required>

                            <label class="form-label">
                                Pesan
                            </label>

                            <textarea id="pesan"
                                      class="form-control"
                                      rows="5"
                                      placeholder="Tuliskan pesan Anda..."
                                      required></textarea>

                            <button type="submit"
                                    class="btn-purple w-100">
                                Kirim Pesan melalui WhatsApp
                            </button>

                        </form>

                    </div>

                </div>

            </div>

        </section>

        <!-- FAQ -->
        <section class="my-5">

            <h2 class="section-title">
                Pertanyaan yang Sering Diajukan
            </h2>

            <p class="section-subtitle">
                Beberapa informasi yang mungkin Anda butuhkan.
            </p>

            <div class="row">

                <div class="col-md-6">
                    <div class="faq-box">
                        <h6>1. Bagaimana cara memesan jasa?</h6>
                        <p>
                            Anda dapat menghubungi kami melalui
                            WhatsApp atau mengirimkan pesan
                            melalui formulir kontak.
                        </p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="faq-box">
                        <h6>2. Apakah layanan tersedia setiap hari?</h6>
                        <p>
                            Silakan hubungi kami untuk mengetahui
                            jadwal dan ketersediaan layanan.
                        </p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="faq-box">
                        <h6>3. Bagaimana cara mengetahui harga jasa?</h6>
                        <p>
                            Hubungi tim kami untuk mendapatkan
                            informasi harga sesuai kebutuhan Anda.
                        </p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="faq-box">
                        <h6>4. Apakah bisa konsultasi terlebih dahulu?</h6>
                        <p>
                            Tentu, Anda dapat berkonsultasi
                            sebelum melakukan pemesanan jasa.
                        </p>
                    </div>
                </div>

            </div>

        </section>

    </div>

</div>

<!-- JAVASCRIPT FORM WHATSAPP -->
<script>
    document.getElementById('contactForm').addEventListener('submit', function(e) {

        e.preventDefault();

        const nama = document.getElementById('nama').value;
        const email = document.getElementById('email').value;
        const subjek = document.getElementById('subjek').value;
        const pesan = document.getElementById('pesan').value;

        const nomorWhatsApp = "6281234567890";

        const teks =
            "Halo JasaKita, saya ingin menghubungi Anda.%0A%0A" +
            "Nama: " + nama + "%0A" +
            "Email: " + email + "%0A" +
            "Subjek: " + subjek + "%0A" +
            "Pesan: " + pesan;

        const url = "https://wa.me/" + nomorWhatsApp +
                    "?text=" + encodeURIComponent(
                        "Halo JasaKita, saya ingin menghubungi Anda.\n\n" +
                        "Nama: " + nama + "\n" +
                        "Email: " + email + "\n" +
                        "Subjek: " + subjek + "\n" +
                        "Pesan: " + pesan
                    );

        window.open(url, "_blank");

    });
</script>

@endsection
