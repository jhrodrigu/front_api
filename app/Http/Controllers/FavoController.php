<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

class FavoController extends Controller
{
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
            return view('blog', compact('selected'));
        }

    }
}
