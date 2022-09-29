<?php

namespace App\Http\Controllers;

// Aqui se crea una clase para el controller y pueda ser exportado
class FavoController extends Controller
{
    // Esta funcion lo que hace es que recibe la informacion y mostrar las imagenes seleccionadas
    public function blog(){
        if (isset($_POST['enviar'])) {
            $arr = [];
            $arr = $_POST['enviar'];


            return response()->json($arr, 200, []);
            dd($arr);
        }
    }

// Esta es otra funcion la cual me have una validacion de las imagenes que fueron seleccionadas

     // public function blog(){
    //     if (isset($_POST['enviar'])) {
    //         if (is_array($_POST['id'])) {
    //             $selected = '';
    //             $num_countries = count($_POST['id']);
    //             $current = 0;
    //             foreach ($_POST['id'] as $key => $value) {
    //                 if ($current != $num_countries-1)
    //                     $selected .= $value.', ';
    //                 else
    //                     $selected .= $value.'.';
    //                 $current++;
    //             }
    //         }
    //         dd($selected);
    //         return view('blog', compact('selected'));
    //     }

    // }
}
