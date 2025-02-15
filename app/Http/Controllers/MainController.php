<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

use App\Models\Tag;

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
        $tags = Tag::where('type', 'art')
           ->get();
        return view('pages/art', ['tags' => $tags]);
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
