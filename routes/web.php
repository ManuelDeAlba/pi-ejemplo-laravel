<?php

use App\Http\Controllers\SitioController;
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
    // return view('welcome'); // resources/views/welcome
    return redirect('/contacto'); // Por ahora redirige a contacto para no ver la página de bienvenida
});

Route::get('/contacto/{tipo?}', [SitioController::class, 'formContacto']);
Route::post('/contacto', [SitioController::class, 'contactoSave']);

// Route::resource('tareas', TareaController::class); // Utiliza los métodos del controlador cuando se usa la opción -r en php artisan make:model Tarea -mcr