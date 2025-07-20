<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Log;

use App\Models\Tag;
use App\Models\MediaItem;
use App\Models\BlogItem;

use Cookie;

use League\CommonMark\CommonMarkConverter;

class MainController extends Controller
{
    public function main(): View
    {
        $mediaItems = MediaItem::where('type', 'art')->orderBy('created_at', 'desc')->take(1)->get();

        $blogs = BlogItem::orderBy('created_at', 'desc')->take(1)->get();;

        $converter = new CommonMarkConverter();

        foreach ($blogs as $blog) {
            $blog->content_html = $converter->convertToHtml($blog->content);
        }

        return view('main/home', ['mediaItems' => $mediaItems, 'blogs' => $blogs]);
    }

    public function blog(): View
    {
        $blogs = BlogItem::get();

        $converter = new CommonMarkConverter();

        foreach ($blogs as $blog) {
            $blog->content_html = $converter->convertToHtml($blog->content);
        }

        return view('main.blog', ['blogs' => $blogs]);
    }

    public function media(): View
    {
        $videos = MediaItem::where('type', 'media')->get();

        return view('main/media', ['videos' => $videos]);
    }

    public function reviews(): View
    {
        return view('main/reviews', []);
    }

    public function places(): View
    {
        return view('main/places', []);
    }

    public function art(): View
    {
        $tags = Tag::where('type', 'art')->get();
        $mediaItems = MediaItem::where('type', 'art')->get()->orderBy('created_at', 'desc');

        return view('main/art', ['tags' => $tags, 'mediaItems' => $mediaItems]);
    }

    public function software(): View
    {
        return view('main/software', []);
    }

    public function about(): View
    {
        return view('main/about', []);
    }
}
