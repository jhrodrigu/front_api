<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class PageController extends Controller
{
    public function home(){
        $token = 'uToqL-cX3epRRMAURCxpU77v_rDyDNpRWFfRG2FN238';
        $fotos = HTTP::get('https://api.unsplash.com/photos/?client_id='.$token);
        $fotosArray = $fotos->json();

        return view('home', compact('fotosArray'));
    }

    public function blog(){
        return view('blog');
    }
}
