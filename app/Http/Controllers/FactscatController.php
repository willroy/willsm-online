<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Log;

class FactscatController extends Controller
{
    public function index(): View
    {
        return view('factscat/index');
    }
}
