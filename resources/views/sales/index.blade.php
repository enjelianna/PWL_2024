<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Penjualan - POS</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <h1>Halaman Penjualan</h1>
    </header>

    <main>
        <form action="{{ route('sales.process') }}" method="POST">
            @csrf
            <fieldset>
                <legend>Detail Transaksi</legend>
                <label for="product">Pilih Produk:</label>
                <select id="product" name="product">
                    @foreach ($products as $product)
                        <option value="{{ $product['id'] }}">{{ $product['name'] }} - Rp{{ number_format($product['price'], 0, ',', '.') }}</option>
                    @endforeach
                </select>

                <label for="quantity">Jumlah:</label>
                <input type="number" id="quantity" name="quantity" min="1" required>

                <button type="submit">Tambah ke Keranjang</button>
            </fieldset>
        </form>

        <section>
            <h2>Keranjang Belanja</h2>
            <ul>
                <!-- Daftar produk yang telah ditambahkan ke keranjang -->
                <!-- Ini bisa di-generate dinamis menggunakan Blade atau JavaScript -->
            </ul>
            <p><strong>Total:</strong> Rp0</p>
            <button type="button">Proses Pembayaran</button>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Toko SerbaAda</p>
    </footer>
</body>
</html>