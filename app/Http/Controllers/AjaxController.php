<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

use Cookie;

class AjaxController extends Controller
{
  public function themeSwitch() {
    $response = new Response('Hello World');
    $response->withCookie(cookie('theme', request('theme')));
    return $response;
  }
}
