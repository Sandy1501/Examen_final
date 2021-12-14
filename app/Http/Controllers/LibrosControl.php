<?php

namespace App\Http\Controllers;

use App\Models\Libros;
use Illuminate\Http\Request;

class LibrosControl extends Controller
{
    public function home(Libros $libro)
    {
        $libro = Libros::orderBy('id', 'desc')->paginate();
        return view('home', compact('libro'));
    }

    public function mostrar(Libros $libro){
        return view ('libros.mostrar', compact('libro'));
    }

    public function agregar(){
        return view('libros.agregar');
    }
    public function store(Request $request){
        $registros = new Libros();

        $registros->titulo = $request->titulo;
        $registros->autor = $request->autor;
        $registros->editorial = $request->editorial;
        $registros->numero_paginas = $request->numero_paginas;
        $registros->producto = $request->producto;
        $registros->usuario = $request->usuario;

        $registros->save();
        return redirect()->route('home', $registros);
    }
    
    public function actualizar(Libros $libro){
        return view('libros.actualizar',compact('libro'));
    }
    public function update(Request $request, Libros $libro){
        $libro->titulo = $request->titulo;
        $libro->autor = $request->autor;
        $libro->editorial = $request->editorial;
        $libro->numero_paginas = $request->numero_paginas;
        $libro->producto = $request->producto;
        $libro->usuario = $request->usuario;

        $libro->save();
        return redirect()->route('libros.mostrar', $libro);
    }
    
    public function eliminar(Libros $libro){
        $libro->delete();
        return redirect()->route('home');
    }
}
