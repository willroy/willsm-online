<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Log;

use App\Models\BlogItem;

use League\CommonMark\CommonMarkConverter;

class BlogController extends Controller
{
    public function edit($id = null): View
    {
        $blog = BlogItem::findOrFail($id);
        return view('blog/edit', ['blog' => $blog]);
    }

    public function view($id = null): View
    {
        $blog = BlogItem::findOrFail($id);

        $converter = new CommonMarkConverter();

        $blog->content_html = $converter->convertToHtml($blog->content);

        return view('blog/view', ['blog' => $blog]);
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
