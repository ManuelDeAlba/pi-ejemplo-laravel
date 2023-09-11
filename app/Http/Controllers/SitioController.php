<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use Illuminate\Http\Request;

class SitioController extends Controller
{
    public function formContacto($tipo = null){
        // Con with se usa la concatenación de métodos y se pasa un objeto con clave - valor para pasar variables
        // return view('contacto')->with(['tipo' => $tipo]); 
    
        // Con compact se pasa la variable a la vista
        return view('contacto', compact("tipo")); // resources/views/contacto
    }

    public function contactoSave(Request $req){
        // dd($req); // Muestra toda la información de la petición
        // dd($req->all()); // Muestra el body de la petición
        // dd($req->correo); // Muestra solo el campo seleccionado
    
        // Validación de campos
        // Si hay un error, la variable $errors se manda a donde redirija la página (/contacto)
        $req->validate([
            'correo' => 'required|email', // Sintaxis separados por "|°
            'comentario' => ['required', 'min:10', 'max:50'] // Sintaxis arreglo
        ]);
    
        // Insertar en la base de datos
        //? Se usa eloquent ORM
        $contacto = new Contacto();
        $contacto->correo = $req->correo;
        $contacto->comentario = $req->comentario;
        $contacto->save(); // Método para guardar la información en la db
    
        return redirect("/contacto"); // Redirecciona al inicio, no se tiene que usar header("...")
    }
}
