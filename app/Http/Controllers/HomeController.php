<?php

namespace App\Http\Controllers;

use App\Models\Shoe;

class HomeController extends Controller
{
    public function index()
    {
        $shoes = Shoe::latest()->take(4)->get();

        return view('page.home', compact('shoes'));
    }
}