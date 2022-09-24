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
        if (isset($_POST['enviar'])) {
            if (is_array($_POST['id'])) {
                $selected = '';
                $num_countries = count($_POST['id']);
                $current = 0;
                foreach ($_POST['id'] as $key => $value) {
                    if ($current != $num_countries-1)
                        $selected .= $value.', ';
                    else
                        $selected .= $value.'.';
                    $current++;
                }
            }
        }
        return view('blog', compact('selected'));
    }
}
