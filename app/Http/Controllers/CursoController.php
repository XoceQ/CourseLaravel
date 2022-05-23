<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;
use App\Http\Requests\StoreCurso;

class CursoController extends Controller
{
    
    public function index(){
        
        $cursos = Curso::orderBy('id', 'desc')->paginate('20');//metodo encargado de mostrar la pagina principal
        
        return view('cursos.index', compact('cursos'));
    }

    public function create(){//metodo encargado de mostrar un formulario para crear un curso
        return view('cursos.create');
    } 

    public function store(StoreCurso $request){

        $curso = Curso::create($request->all());

        return redirect()->route('cursos.show', $curso);
    }

    public function show(Curso $curso){//metodo encargado de mostrar un elemento en particular en este caso un curso
                                    
        return view('cursos.show', compact('curso'));/*Crea un array que contiene variables y sus valores. Por cada variable, compact () busca una variable con ese nombre en la tabla de símbolos actual y las añade al array de salida de modo que el nombre de la variable se convierte en la clave y el contenido de la variable se convierte en el valor para esa clave.*/
    
    }
    public function edit(Curso $curso){
        return view('cursos.edit', compact('curso'));

    }
    public function update(Request $request, Curso $curso){

        $request->validate([
            'name' => 'required',
            'descripcion' => 'required',
            'categoria' => 'required'
        ]);
        
        $curso->update($request->all());  
        
        return redirect()->route('cursos.show', $curso);

    }

    public function destroy(Curso $curso){
        $curso->delete();

        return redirect()->route('cursos.index');
    }
}
