<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $username        = 'Meja 1';
		$last_login      = date('Y-m-d H:i:s');
		$makanan = ['Nasi goreng', 'Sushi', 'Chicken katsu'];
        $minuman = ['matcha', 'lemon tea', 'orange juice'];
    return view('home', compact('username', 'last_login', 'makanan','minuman'));
    }

    public function create()
    {

    }

    public function store(Request $request)
    {

    }

    public function show(string $id)
    {

    }

    public function edit(string $id)
    {

    }


    public function update(Request $request, string $id)
    {

    }

    public function destroy(string $id)
    {

    }
}
