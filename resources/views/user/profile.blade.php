<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Pengguna - POS</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <h1>Profil Pengguna</h1>
    </header>

    <main>
        <p><strong>ID Pengguna:</strong> {{ $id }}</p>
        <p><strong>Nama:</strong> {{ $name }}</p>
        <!-- Tambahkan informasi lain tentang pengguna jika diperlukan -->
    </main>

    <footer>
        <p>&copy; 2024 Toko SerbaAda</p>
    </footer>
</body>
</html>