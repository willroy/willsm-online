<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MediaController extends Controller
{
    public function view(): View
    {
        return view('media/view', []);
    }

    public function edit(): View
    {
        return view('media/edit', []);
    }

    public function save(): View
    {
        return view('media/view', []);
    }

    public function delete(): View
    {
        return view('media/view', []);
    }
}
