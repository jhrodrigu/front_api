<?php
    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Http;


    class HomeController extends Controller{
        public function __construct()
        {
            $this->middleware('auth');
        }

        public function index(){
            $respuesta = Http::get('https://jsonplaceholder.typicode.com/users');
            $fotos = $respuesta->json();
            return view('home', compact('fotos'));
        }
    }
