<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome'); // resources/views/welcome
});

Route::get('/contacto/{tipo?}', function($tipo = null){
    // Con with se usa la concatenación de métodos y se pasa un objeto con clave - valor para pasar variables
    // return view('contacto')->with(['tipo' => $tipo]); 

    // Con compact se pasa la variable a la vista
    return view('contacto', compact("tipo")); // resources/views/contacto
});

Route::post('/contacto', function(Request $req){
    // return "POST formulario contacto";
    // dd($req); // Muestra toda la información de la petición
    // dd($req->all()); // Muestra el body de la petición
    dd($req->correo); // Muestra solo el campo seleccionado
});