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
        // if error on size limit for file upload need to change php.ini on server

        $uploaded = request()->uploaded;
        $type = request()->type;

        if ( $type == "art" ) {
            request()->validate([
                'uploaded' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
        } elseif ( $type == "music" ) {
            // request()->validate([
            //     'uploaded' => 'required|video|mimes:mpeg,ogg,mp4,webm,3gp,mov,flv,avi,wmv,ts|max:100040',
            // ]);
        }

        $uploadedName = time().'.'.$uploaded->getClientOriginalExtension();
        if ( $type == "art" ) { $uploaded->move(public_path('images'), $uploadedName); }
        if ( $type == "music" ) { $uploaded->move(public_path('videos'), $uploadedName); }

        $mediaItem = new MediaItem;
        $mediaItem->type = $type;
        if ( $type == "art" ) { $mediaItem->path = 'images/' . $uploadedName; }
        if ( $type == "music" ) { $mediaItem->path = 'videos/' . $uploadedName; }
        
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
