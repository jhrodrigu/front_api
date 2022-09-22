<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PageController extends Controller
{
    public function home(){
        $fotos = HTTP::get('https://jsonplaceholder.typicode.com/users');
        $fotosArray = $fotos->json();

        return view('home', compact('fotosArray'));
    }

    public function blog(){
        return view('blog');
    }
}
