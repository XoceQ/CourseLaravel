<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){ //metodo encargado de mostrar la pagina principal
        return view('cursos.index');
    }
    public function create(){//metodo encargado de mostrar un formulario para crear un curso
        return view('cursos.create');
    } 
    public function show($curso){//metodo encargado de mostrar un elemento en particular en este caso un curso
        return view('cursos.show', compact('curso'));/*Crea un array que contiene variables y sus valores. Por cada variable, compact () busca una variable con ese nombre en la tabla de símbolos actual y las añade al array de salida de modo que el nombre de la variable se convierte en la clave y el contenido de la variable se convierte en el valor para esa clave.*/
    
    }
}
