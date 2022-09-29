<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\FavoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Aqui se crea las rutas que van asociadas a las paginas que se quieran crear

// Esta es la ruta para la pagina principal o de imagenes
Route::controller(PageController::class)->group(function(){
    Route::get('/', 'home')->name('home');

});

// Esta es la ruta de favoritos, la cual trae la imagenes seleccionadas
Route::controller(FavoController::class)->group(function(){
    Route::post('blog', 'blog')->name('blog');
});

