<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

use App\Models\MediaItem;

class MediaController extends Controller
{
    public function index(): View
    {
        $artMediaItems = MediaItem::where('type', 'art')->get();
        $musicMediaItems = MediaItem::where('type', 'music')->get();
        return view('media/index', ['artMediaItems' => $artMediaItems, 'musicMediaItems' => $musicMediaItems]);
    }

    public function view($id): View
    {
        return view('media/view', []);
    }

    public function edit($id = null): View
    {
        return view('media/edit', []);
    }

    public function save($id = null)
    {
        $image = request()->image;
        $type = request()->type;

        request()->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('images'), $imageName);

        $mediaItem = new MediaItem;
        $mediaItem->type = $type;
        $mediaItem->path = 'images/' . $imageName;
        $mediaItem->save();

        return redirect()->route('media.index');
    }

    public function delete($id)
    {
        $mediaItem = MediaItem::findOrFail($id);
        $mediaItem->delete();
        return redirect()->route('media.index');
    }
}
