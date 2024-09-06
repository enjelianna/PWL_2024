<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Menampilkan view untuk halaman home
        return view('home');
    }
}