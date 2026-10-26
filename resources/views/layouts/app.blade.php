<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Website Jasa')</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; }
        nav { background: #1f2937; padding: 15px 30px; }
        nav a { color: #fff; text-decoration: none; margin-right: 20px; }
        main { padding: 30px; min-height: 60vh; }
        footer { background: #1f2937; color: #fff; text-align: center; padding: 15px; }
    </style>
</head>
<body>
    <nav>
        <a href="/">Beranda</a>
        <a href="/layanan">Layanan</a>
        <a href="/tentang">Tentang</a>
        <a href="/kontak">Kontak</a>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2026 Website Jasa</p>
    </footer>
</body>
</html>