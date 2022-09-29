<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

// Aqui se crea una clase para el controller y pueda ser exportado
class PageController extends Controller
{
    // Esta funcion lo que hace es consumir la api de imagenes
    public function home(){
        // Para poder consumir la api se requiere de un token el cual se le crea una variable para agregarla en la api y asi porder utilizarla
        $token = 'uToqL-cX3epRRMAURCxpU77v_rDyDNpRWFfRG2FN238';
        $fotos = HTTP::get('https://api.unsplash.com/photos/?client_id='.$token);
        // Lo que se le indica es que la informacion que viene me la muestre en un json para poder manipilarlo mas facil y guardarlo en una variable
        $fotosArray = $fotos->json();
        // Aqui se le indica que la informacion recibida por la api me la muestre en la pagina home, la cual es la de imagenes
        return view('home', compact('fotosArray'));


    }

}
