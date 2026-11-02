
@extends('layouts.app')

@section('title', 'Kontak Kami')

@section('content')

<style>
    .contact-header {
        background: linear-gradient(135deg, #0d6efd, #6610f2);
        color: white;
        padding: 60px 20px;
        border-radius: 18px;
        text-align: center;
        margin-bottom: 40px;
    }

    .contact-header h1 {
        font-weight: bold;
        font-size: 38px;
    }

    .contact-card {
        border: none;
        border-radius: 15px;
        transition: 0.3s;
        height: 100%;
    }

    .contact-card:hover {
        transform: translateY(-7px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.12);
    }

    .contact-icon {
        font-size: 42px;
        margin-bottom: 15px;
    }

    .contact-form {
        border: none;
        border-radius: 15px;
    }

    .contact-form input,
    .contact-form select,
    .contact-form textarea {
        padding: 12px;
        border-radius: 9px;
    }

    .faq-item {
        padding: 20px;
        border: 1px solid #ddd;
        border-radius: 12px;
        margin-bottom: 15px;
    }

    .whatsapp-float {
        position: fixed;
        bottom: 20px;
        right: 20px;
        z-index: 999;
        border-radius: 30px;
        padding: 13px 20px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.2);
    }

    @media(max-width: 576px) {
        .contact-header h1 {
            font-size: 28px;
        }
    }
</style>

<div class="container py-5">

    {{-- HEADER --}}
    <div class="contact-header">
        <span class="badge bg-light text-primary mb-3">
            Layanan Pelanggan
        </span>

        <h1>Hubungi Kami</h1>

        <p class="lead">
            Kami siap membantu kebutuhan jasa Anda.
        </p>

        <p>
            Konsultasikan kebutuhan Anda dan dapatkan solusi
            terbaik bersama tim profesional kami.
        </p>

        <a href="#form-kontak" class="btn btn-light btn-lg mt-3">
            Hubungi Sekarang
        </a>
    </div>

    {{-- INFORMASI KONTAK --}}
    <section class="mb-5">

        <div class="text-center mb-4">
            <h2 class="fw-bold">Informasi Kontak</h2>
            <p class="text-muted">
                Silakan hubungi kami melalui informasi berikut.
            </p>
        </div>

        <div class="row g-4">

            {{-- WHATSAPP --}}
            <div class="col-md-4">
                <div class="card contact-card shadow-sm">
                    <div class="card-body text-center p-4">

                        <div class="contact-icon">📱</div>

                        <h5>WhatsApp</h5>

                        <p class="text-muted">
                            Konsultasi dan pemesanan jasa dengan mudah.
                        </p>

                        <a href="https://wa.me/6281234567890"
                           target="_blank"
                           rel="noopener noreferrer"
                           class="btn btn-success w-100">
                            Chat Sekarang
                        </a>

                    </div>
                </div>
            </div>

            {{-- EMAIL --}}
            <div class="col-md-4">
                <div class="card contact-card shadow-sm">
                    <div class="card-body text-center p-4">

                        <div class="contact-icon">📧</div>

                        <h5>Email</h5>

                        <p class="text-muted">
                            Kirim pertanyaan dan permintaan informasi.
                        </p>

                        <a href="mailto:email@contoh.com"
                           class="btn btn-primary w-100">
                            Kirim Email
                        </a>

                    </div>
                </div>
            </div>

            {{-- JAM OPERASIONAL --}}
            <div class="col-md-4">
                <div class="card contact-card shadow-sm">
                    <div class="card-body text-center p-4">

                        <div class="contact-icon">🕒</div>

                        <h5>Jam Operasional</h5>

                        <p class="text-muted">
                            Senin - Sabtu<br>
                            08.00 - 17.00 WIB
                        </p>

                        <span class="badge bg-success">
                            Jam Pelayanan
                        </span>

                    </div>
                </div>
            </div>

        </div>
    </section>

    {{-- FORM PEMESANAN --}}
    <section class="mb-5" id="form-kontak">

        <div class="row g-4">

            <div class="col-lg-5">

                <h2 class="fw-bold mb-3">
                    Mari Bekerja Sama!
                </h2>

                <p class="text-muted">
                    Kami menyediakan berbagai layanan jasa
                    profesional sesuai kebutuhan pelanggan.
                    Silakan isi formulir untuk memulai konsultasi.
                </p>

                <div class="bg-light rounded-3 p-3 mb-3">
                    <h6>✅ Pelayanan Profesional</h6>
                    <p class="text-muted mb-0">
                        Memberikan pelayanan terbaik kepada pelanggan.
                    </p>
                </div>

                <div class="bg-light rounded-3 p-3 mb-3">
                    <h6>⚡ Respon Cepat</h6>
                    <p class="text-muted mb-0">
                        Memudahkan komunikasi antara pelanggan dan admin.
                    </p>
                </div>

                <div class="bg-light rounded-3 p-3">
                    <h6>💡 Solusi Terbaik</h6>
                    <p class="text-muted mb-0">
                        Layanan disesuaikan dengan kebutuhan pelanggan.
                    </p>
                </div>

            </div>

            <div class="col-lg-7">

                <div class="card contact-form shadow-sm">

                    <div class="card-body p-4">

                        <h3 class="fw-bold mb-4">
                            Formulir Pemesanan Jasa
                        </h3>

                        <form id="formKontak">

                            <div class="mb-3">
                                <label class="form-label">
                                    Nama Lengkap
                                </label>

                                <input type="text"
                                       id="nama"
                                       class="form-control"
                                       placeholder="Masukkan nama lengkap"
                                       required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">
                                    Email
                                </label>

                                <input type="email"
                                       id="email"
                                       class="form-control"
                                       placeholder="nama@email.com"
                                       required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">
                                    Nomor WhatsApp
                                </label>

                                <input type="tel"
                                       id="telepon"
                                       class="form-control"
                                       placeholder="081234567890"
                                       required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">
                                    Jenis Layanan
                                </label>

                                <select id="layanan"
                                        class="form-select"
                                        required>

                                    <option value="">
                                        -- Pilih Layanan --
                                    </option>

                                    <option value="Pembuatan Website">
                                        Pembuatan Website
                                    </option>

                                    <option value="Desain Grafis">
                                        Desain Grafis
                                    </option>

                                    <option value="Pemrograman">
                                        Pemrograman
                                    </option>

                                    <option value="Konsultasi IT">
                                        Konsultasi IT
                                    </option>

                                    <option value="Layanan Lainnya">
                                        Layanan Lainnya
                                    </option>

                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">
                                    Perkiraan Anggaran
                                </label>

                                <select id="anggaran"
                                        class="form-select">

                                    <option value="Belum ditentukan">
                                        Pilih Anggaran
                                    </option>

                                    <option value="Di bawah Rp500.000">
                                        Di bawah Rp500.000
                                    </option>

                                    <option value="Rp500.000 - Rp1.000.000">
                                        Rp500.000 - Rp1.000.000
                                    </option>

                                    <option value="Rp1.000.000 - Rp5.000.000">
                                        Rp1.000.000 - Rp5.000.000
                                    </option>

                                    <option value="Di atas Rp5.000.000">
                                        Di atas Rp5.000.000
                                    </option>

                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">
                                    Detail Kebutuhan
                                </label>

                                <textarea id="pesan"
                                          class="form-control"
                                          rows="5"
                                          placeholder="Jelaskan kebutuhan jasa Anda..."
                                          required></textarea>
                            </div>

                            <button type="submit"
                                    class="btn btn-primary btn-lg w-100">
                                Kirim Pesanan via WhatsApp
                            </button>

                            <p class="small text-muted mt-3 mb-0">
                                Pesanan akan diteruskan melalui WhatsApp.
                            </p>

                        </form>

                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- FAQ --}}
    <section class="mb-5">

        <div class="text-center mb-4">
            <h2 class="fw-bold">Pertanyaan Umum</h2>

            <p class="text-muted">
                Beberapa informasi yang sering ditanyakan pelanggan.
            </p>
        </div>

        <div class="faq-item">
            <h5>1. Bagaimana cara memesan jasa?</h5>
            <p class="text-muted mb-0">
                Isi formulir pemesanan kemudian kirim melalui WhatsApp.
            </p>
        </div>

        <div class="faq-item">
            <h5>2. Apakah harga jasa bisa disesuaikan?</h5>
            <p class="text-muted mb-0">
                Harga dapat disesuaikan dengan kebutuhan dan
                tingkat kesulitan pekerjaan.
            </p>
        </div>

        <div class="faq-item">
            <h5>3. Bagaimana cara mengetahui progres pekerjaan?</h5>
            <p class="text-muted mb-0">
                Pelanggan dapat menghubungi admin untuk mengetahui
                perkembangan pekerjaan.
            </p>
        </div>

        <div class="faq-item">
            <h5>4. Apakah bisa konsultasi terlebih dahulu?</h5>
            <p class="text-muted mb-0">
                Tentu, pelanggan dapat berkonsultasi sebelum
                melakukan pemesanan jasa.
            </p>
        </div>

    </section>

    {{-- PENUTUP --}}
    <section class="text-center bg-light rounded-4 p-5 mb-4">

        <h2 class="fw-bold">
            Siap Memulai Proyek Anda?
        </h2>

        <p class="text-muted mt-3">
            Jangan ragu untuk menghubungi kami.
            Kami siap membantu kebutuhan jasa Anda.
        </p>

        <a href="https://wa.me/6281234567890"
           target="_blank"
           rel="noopener noreferrer"
           class="btn btn-primary btn-lg mt-2">
            Konsultasi Sekarang
        </a>

    </section>

</div>

{{-- FLOATING WHATSAPP --}}
<a href="https://wa.me/6281234567890"
   target="_blank"
   rel="noopener noreferrer"
   class="btn btn-success whatsapp-float">

    💬 Hubungi Kami

</a>

{{-- JAVASCRIPT --}}
<script>

document.getElementById('formKontak').addEventListener('submit', function(event) {

    event.preventDefault();

    const nama = document.getElementById('nama').value;
    const email = document.getElementById('email').value;
    const telepon = document.getElementById('telepon').value;
    const layanan = document.getElementById('layanan').value;
    const anggaran = document.getElementById('anggaran').value;
    const pesan = document.getElementById('pesan').value;

    // Ganti dengan nomor WhatsApp admin
    const nomorWhatsApp = "6281234567890";

    const teks =
        "HALO, SAYA INGIN MEMESAN JASA\n\n" +
        "Nama: " + nama + "\n" +
        "Email: " + email + "\n" +
        "Nomor WhatsApp: " + telepon + "\n" +
        "Jenis Layanan: " + layanan + "\n" +
        "Anggaran: " + anggaran + "\n\n" +
        "Detail Kebutuhan:\n" + pesan;

    const url = "https://wa.me/" + nomorWhatsApp +
                "?text=" + encodeURIComponent(teks);

    window.open(url, "_blank");

});

</script>

@endsection
