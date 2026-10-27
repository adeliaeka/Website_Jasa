```php
@extends('layouts.app')

@section('title', 'Kontak Kami')

@section('content')

<div class="container py-5">

    {{-- Header Kontak --}}
    <div class="text-center mb-5">
        <h1 class="fw-bold">Hubungi Kami</h1>
        <p class="text-muted">
            Butuh jasa profesional? Hubungi kami untuk konsultasi
            dan informasi layanan yang Anda butuhkan.
        </p>
    </div>

    {{-- Informasi Kontak --}}
    <div class="row g-4 mb-5">

        <div class="col-md-4">
            <div class="card shadow-sm border-0 h-100">
                <div class="card-body text-center p-4">
                    <div class="fs-1 mb-3">📱</div>
                    <h5>WhatsApp</h5>
                    <p class="text-muted">
                        Konsultasikan kebutuhan jasa Anda.
                    </p>
                    <a href="https://wa.me/6281234567890"
                       target="_blank"
                       rel="noopener noreferrer"
                       class="btn btn-success">
                        Chat Sekarang
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm border-0 h-100">
                <div class="card-body text-center p-4">
                    <div class="fs-1 mb-3">📧</div>
                    <h5>Email</h5>
                    <p class="text-muted">
                        Kirim pertanyaan atau permintaan penawaran.
                    </p>
                    <a href="mailto:email@contoh.com"
                       class="btn btn-primary">
                        Kirim Email
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm border-0 h-100">
                <div class="card-body text-center p-4">
                    <div class="fs-1 mb-3">🕒</div>
                    <h5>Jam Operasional</h5>
                    <p class="text-muted mb-1">
                        Senin - Sabtu
                    </p>
                    <p class="text-muted">
                        08.00 - 17.00 WIB
                    </p>
                </div>
            </div>
        </div>

    </div>

    {{-- Formulir Kontak --}}
    <div class="row g-4 mb-5">

        <div class="col-lg-5">
            <h2 class="fw-bold mb-3">Mari Bekerja Sama</h2>

            <p class="text-muted">
                Kami menyediakan layanan jasa sesuai kebutuhan pelanggan.
                Silakan isi formulir untuk menjelaskan layanan yang Anda
                inginkan.
            </p>

            <div class="bg-light rounded p-4 mt-4">
                <h5>Kenapa Memilih Kami?</h5>
                <p>✓ Pelayanan ramah dan profesional</p>
                <p>✓ Konsultasi kebutuhan jasa</p>
                <p>✓ Komunikasi mudah dan cepat</p>
                <p class="mb-0">✓ Layanan sesuai kebutuhan pelanggan</p>
            </div>
        </div>

        <div class="col-lg-7">
            <div class="card shadow-sm border-0">
                <div class="card-body p-4">

                    <h3 class="fw-bold mb-4">Formulir Pemesanan Jasa</h3>

                    <form id="formKontak">

                        <div class="mb-3">
                            <label for="nama" class="form-label">
                                Nama Lengkap
                            </label>
                            <input type="text"
                                   id="nama"
                                   class="form-control"
                                   placeholder="Masukkan nama Anda"
                                   required>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">
                                Email
                            </label>
                            <input type="email"
                                   id="email"
                                   class="form-control"
                                   placeholder="nama@email.com"
                                   required>
                        </div>

                        <div class="mb-3">
                            <label for="layanan" class="form-label">
                                Jenis Layanan
                            </label>
                            <select id="layanan"
                                    class="form-select"
                                    required>
                                <option value="">Pilih layanan</option>
                                <option>Jasa Pembuatan Website</option>
                                <option>Jasa Desain Grafis</option>
                                <option>Jasa Pemrograman</option>
                                <option>Jasa Konsultasi IT</option>
                                <option>Jasa Lainnya</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="pesan" class="form-label">
                                Detail Kebutuhan
                            </label>
                            <textarea id="pesan"
                                      class="form-control"
                                      rows="5"
                                      placeholder="Jelaskan kebutuhan jasa Anda..."
                                      required></textarea>
                        </div>

                        <button type="submit"
                                class="btn btn-primary w-100">
                            Kirim Permintaan
                        </button>

                    </form>

                </div>
            </div>
        </div>

    </div>

    {{-- FAQ --}}
    <div class="mb-5">
        <div class="text-center mb-4">
            <h2 class="fw-bold">Pertanyaan Umum</h2>
            <p class="text-muted">
                Beberapa informasi sebelum Anda memesan jasa.
            </p>
        </div>

        <div class="accordion" id="faqKontak">

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#faq1">
                        Bagaimana cara memesan jasa?
                    </button>
                </h2>
                <div id="faq1"
                     class="accordion-collapse collapse show"
                     data-bs-parent="#faqKontak">
                    <div class="accordion-body">
                        Isi formulir kontak atau hubungi kami melalui
                        WhatsApp untuk mendiskusikan kebutuhan Anda.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#faq2">
                        Apakah harga jasa bisa dinegosiasikan?
                    </button>
                </h2>
                <div id="faq2"
                     class="accordion-collapse collapse"
                     data-bs-parent="#faqKontak">
                    <div class="accordion-body">
                        Harga dapat dibicarakan berdasarkan jenis layanan,
                        kebutuhan, dan tingkat kesulitan pekerjaan.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#faq3">
                        Bagaimana cara mengetahui status pesanan?
                    </button>
                </h2>
                <div id="faq3"
                     class="accordion-collapse collapse"
                     data-bs-parent="#faqKontak">
                    <div class="accordion-body">
                        Anda dapat menghubungi admin untuk mendapatkan
                        informasi mengenai perkembangan pesanan.
                    </div>
                </div>
            </div>

        </div>
    </div>

    {{-- Ajakan Menghubungi --}}
    <div class="text-center bg-primary text-white rounded p-5">
        <h2 class="fw-bold">Siap Memulai Proyek Anda?</h2>
        <p>
            Hubungi kami dan diskusikan kebutuhan jasa Anda sekarang.
        </p>
        <a href="https://wa.me/6281234567890"
           target="_blank"
           rel="noopener noreferrer"
           class="btn btn-light btn-lg">
            Hubungi Kami
        </a>
    </div>

</div>

{{-- JavaScript Form Kontak --}}
<script>
document.getElementById('formKontak').addEventListener('submit', function(event) {
    event.preventDefault();

    const nama = document.getElementById('nama').value.trim();
    const email = document.getElementById('email').value.trim();
    const layanan = document.getElementById('layanan').value;
    const pesan = document.getElementById('pesan').value.trim();

    const nomorAdmin = '6281234567890';

    const isiPesan =
        'Halo, saya ingin bertanya tentang layanan jasa.\n\n' +
        'Nama: ' + nama + '\n' +
        'Email: ' + email + '\n' +
        'Layanan: ' + layanan + '\n' +
        'Detail kebutuhan: ' + pesan;

    const url = 'https://wa.me/' + nomorAdmin +
        '?text=' + encodeURIComponent(isiPesan);

    window.open(url, '_blank');
});
</script>

@endsection
```