<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libros;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Libros $libro)
    {
        $libro = Libros::orderBy('id', 'desc')->paginate();
        return view('libros.index', compact('libro'));
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

        $registros->save();
        return redirect()->route('libros.index', $registros);
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

        $libro->save();
        return redirect()->route('libros.index', $libro);
    }
    
    public function eliminar(Libros $libro){
        $libro->delete();
        return redirect()->route('libros.index');
    }
}
