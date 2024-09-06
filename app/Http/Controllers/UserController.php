<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showProfile($id, $name)
    {
        // Misalkan kamu ingin melakukan sesuatu dengan $id dan $name
        // Contoh: ambil data pengguna dari database (jika ada)

        // Kirim data ke view
        return view('user.profile', compact('id', 'name'));
    }
}