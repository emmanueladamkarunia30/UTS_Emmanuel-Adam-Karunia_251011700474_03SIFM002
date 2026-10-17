<?php

namespace App\Http\Controllers;

use App\Models\Shoe;

class ShoeController extends Controller
{
    public function index()
    {
        // Menampilkan 5 data sepatu per halaman
        $shoes = Shoe::paginate(5);

        return view('shoes.index', compact('shoes'));
    }

    public function show($id)
    {
        $shoe = Shoe::findOrFail($id);

        return view('shoes.show', compact('shoe'));
    }
}