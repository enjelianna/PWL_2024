<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function foodBeverage()
    {
        // Menampilkan view untuk kategori food & beverage
        return view('product\food-baverage');
    }

    public function beautyHealth()
    {
        // Menampilkan view untuk kategori beauty & health
        return view('product\beauty-health');
    }

    public function homeCare()
    {
        // Menampilkan view untuk kategori home care
        return view('product\home-care');
    }

    public function babyKid()
    {
        // Menampilkan view untuk kategori baby & kid
        return view('product\baby-kid');
    }
}