<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Log;

use App\Models\BlogItem;

class BlogController extends Controller
{
    public function edit($id = null): View
    {
        return view('blog/edit', []);
    }

    public function save($id = null)
    {
        $title = request()->title;
        $content = request()->content;

        $blogItem = new BlogItem;
        $blogItem->title = $title;
        $blogItem->content = $content;
        $blogItem->save();

        return redirect()->route('blog');
    }

    public function delete($id)
    {
        return redirect()->route('blog');
    }
}
