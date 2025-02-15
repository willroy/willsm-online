<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

use App\Models\Tag;
use App\Models\MediaItem;

class MainController extends Controller
{
    public function main(): View
    {
        return view('main', []);
    }

    public function music(): View
    {
        return view('main/music', []);
    }

    public function art(): View
    {
        $tags = Tag::where('type', 'art')->get();
        $mediaItems = MediaItem::where('type', 'art')->get();
        return view('main/art', ['tags' => $tags, 'mediaItems' => $mediaItems]);
    }

    public function projects(): View
    {
        return view('main/projects', []);
    }

    public function about(): View
    {
        return view('main/about', []);
    }
}
