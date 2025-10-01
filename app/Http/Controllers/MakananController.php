<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MakananController extends Controller
{
    public function index()
    {
        $makanan = [
            ['nama' => 'Nasi Goreng', 'harga' => 20000, 'asal' => 'Indonesia'],
            ['nama' => 'Sushi', 'harga' => 50000, 'asal' => 'Jepang'],
            ['nama' => 'Tom Yum', 'harga' => 40000, 'asal' => 'Thailand'],
        ];

        // kirim variabel $makanan ke view
        return view('makanan.index', compact('makanan'));
    }
}
