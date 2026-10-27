```php
@extends('layouts.app')

@section('title', 'Layanan')

@section('content')
<div class="container py-5">
    <h1 class="text-center mb-3">Layanan Website Jasa</h1>
    <p class="text-center mb-5">
        Kami menyediakan layanan pembuatan website profesional
        sesuai kebutuhan bisnis Anda.
    </p>

    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body text-center">
                    <h4>Website Bisnis</h4>
                    <p>
                        Pembuatan website untuk memperkenalkan
                        profil perusahaan dan bisnis Anda.
                    </p>
                    <h5>Mulai Rp500.000</h5>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body text-center">
                    <h4>Landing Page</h4>
                    <p>
                        Website satu halaman untuk promosi produk,
                        jasa, dan meningkatkan penjualan.
                    </p>
                    <h5>Mulai Rp250.000</h5>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body text-center">
                    <h4>Toko Online</h4>
                    <p>
                        Pembuatan website toko online untuk
                        menampilkan produk dan menerima pesanan.
                    </p>
                    <h5>Mulai Rp750.000</h5>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center mt-4">
        <h3>Butuh Website untuk Bisnis Anda?</h3>
        <p>Hubungi kami untuk konsultasi dan informasi lebih lanjut.</p>
        <a href="{{ url('/kontak') }}" class="btn btn-primary">
            Hubungi Kami
        </a>
    </div>
</div>
@endsection
```