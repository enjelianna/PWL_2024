<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalesController extends Controller
{
    public function index()
    {
        // Data produk contoh (bisa diambil dari database atau sumber lain)
        $products = [
            ['id' => 1, 'name' => 'Kopi Arabika', 'price' => 50000],
            ['id' => 2, 'name' => 'Teh Hijau', 'price' => 30000],
            ['id' => 3, 'name' => 'Minyak Zaitun', 'price' => 80000],
        ];

        return view('sales.index', ['products' => $products]);
    }
    public function process(Request $request)
    {
        // Validasi dan proses data transaksi di sini
        $productId = $request->input('product');
        $quantity = $request->input('quantity');

        // Logika pemrosesan, misalnya menyimpan ke database atau menghitung total

        return redirect()->route('sales.index')->with('message', 'Produk telah ditambahkan ke keranjang.');
    }

}