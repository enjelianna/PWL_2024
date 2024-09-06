<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - POS</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <h1>Selamat Datang di Toko Kami</h1>
    </header>

    <main>
        <p>Silahkan melakukan transaksi dan melihat kategori produk kami.</p>

        <nav>
            <ul>
                <li><a href="{{ route('category.food-beverage') }}">Food & Beverage</a></li>
                <li><a href="{{ route('category.beauty-health') }}">Beauty & Health</a></li>
                <li><a href="{{ route('category.home-care') }}">Home Care</a></li>
                <li><a href="{{ route('category.baby-kid') }}">Baby & Kid</a></li>
            </ul>
        </nav>
    </main>

    <footer>
        <p>&copy; 2024 Toko SerbaAda.</p>
    </footer>
</body>
</html>