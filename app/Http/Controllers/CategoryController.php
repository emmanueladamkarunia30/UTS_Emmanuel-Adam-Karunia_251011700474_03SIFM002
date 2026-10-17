<?php

namespace App\Http\Controllers;

use App\Models\Shoe;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Shoe::select('sport_type')
            ->distinct()
            ->orderBy('sport_type')
            ->pluck('sport_type');

        return view('page.categories', compact('categories'));
    }
}