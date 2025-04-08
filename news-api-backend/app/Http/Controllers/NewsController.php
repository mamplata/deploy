<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        return response()->json([
            ['title' => 'Breaking News: Laravel Rocks!', 'description' => 'Laravel is a powerful PHP framework for web artisans.'],
            ['title' => 'Vue 3 Released', 'description' => 'Vue 3 brings composition API, better performance, and more.'],
            ['title' => 'Vite is Super Fast', 'description' => 'Vite is the next generation frontend tool for faster development.']
        ]);
    }
}
