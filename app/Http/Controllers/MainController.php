<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class MainController extends Controller
{
    public function index(): View
    {
        return view('index', []);
    }

    public function music(): View
    {
        return view('pages/music', []);
    }

    public function art(): View
    {
        return view('pages/art', []);
    }

    public function projects(): View
    {
        return view('pages/projects', []);
    }

    public function about(): View
    {
        return view('pages/about', []);
    }
}
