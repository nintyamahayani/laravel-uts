<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $title = "Halaman home";
        $content['mahasiswa'] = array(
            'nama' => 'Luh Nintya Mahayani',
            'nim' => '1915101034'
        );

        return view('admin/beranda', compact('title', 'content'));
    }

    public function dashboard()
    {
        $title = "Genie JH";

        return view('admin/dashboard', compact('title'));
    }
}
