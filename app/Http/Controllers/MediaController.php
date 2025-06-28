<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Log;

use App\Models\MediaItem;

class MediaController extends Controller
{
    public function edit($id = null): View
    {
        return view('media/edit', []);
    }

    public function upload()
    {
        return view('media/upload', []);
    }

    public function uploadsave()
    {
        $uploaded = request()->uploaded;
        $type = request()->type;
        $files = request()->file('uploaded');

        foreach($files as $file) {
            $filename = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();

            if ( $type == "art" ) { $file->move(public_path('images'), $filename); }
            if ( $type == "media" ) { $file->move(public_path('videos'), $filename); }

            $mediaItem = new MediaItem;
            $mediaItem->type = $type;
            if ( $type == "art" ) { $mediaItem->path = 'images/' . $filename; }
            if ( $type == "media" ) { $mediaItem->path = 'videos/' . $filename; }
            $mediaItem->save();
        }

        return redirect()->route('art');
    }

    public function save($id = null)
    {
        // if error on size limit for file upload need to change php.ini on server, will be one of these:
        // memory_limit
        // upload_max_filesize
        // post_max_size

        $uploaded = request()->uploaded;
        $type = request()->type;

        if ( $type == "art" ) {
            request()->validate([
                'uploaded' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5000',
            ]);
        } elseif ( $type == "music" ) {
            request()->validate([
                'uploaded' => 'required|video|mimes:mpeg,ogg,mp4,webm,3gp,mov,flv,avi,wmv,ts|max:100040',
            ]);
        }

        $uploadedName = time().'.'.$uploaded->getClientOriginalExtension();
        if ( $type == "art" ) { $uploaded->move(public_path('images'), $uploadedName); }
        if ( $type == "media" ) { $uploaded->move(public_path('videos'), $uploadedName); }

        $mediaItem = new MediaItem;
        $mediaItem->type = $type;
        if ( $type == "art" ) { $mediaItem->path = 'images/' . $uploadedName; }
        if ( $type == "media" ) { $mediaItem->path = 'videos/' . $uploadedName; }
        
        $mediaItem->save();

        return redirect()->route('art');
    }

    public function delete($id)
    {
        $mediaItem = MediaItem::findOrFail($id);
        $mediaItem->delete();
        return redirect()->route('art');
    }
}
