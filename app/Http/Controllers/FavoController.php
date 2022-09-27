<?php

namespace App\Http\Controllers;

class FavoController extends Controller
{
    public function blog(){
        if (isset($_POST['enviar'])) {
            // if (is_array($_POST['id'])) {
            //     $selected = '';
            //     $num_countries = count($_POST['id']);
            //     $current = 0;
            //     foreach ($_POST['id'] as $key => $value) {
            //         if ($current != $num_countries-1)
            //             $selected .= $value.', ';
            //         else
            //             $selected .= $value.'.';
            //         $current++;
            //     }
            // }

            dd($_POST['enviar']);
            return view('blog', compact('selected'));
        }

        // session_start();

        // $valor = $_POST['enviar'];
        // $imagenes = [];
        // $imagenes = $_POST['enviar'];

        // // if(!empty($_POST['id'])){
        // //     $selected = '';
        // //     $current = 0;
        // //     $num_countries = count($_POST['id']);
        // //     foreach ($_POST['id'] as $key => $value) {
        // //         if ($current != $num_countries-1)
        // //             $selected .= $value.', ';
        // //         else
        // //             $selected .= $value.'.';
        // //         $current++;
        // //     }
        // //     return view('blog', compact('selected'));
        // //     array_push($valores, $valor);
        // //     $_SESSION[''] = $valores;
        // // }
        // dd($imagenes);







    }
}
