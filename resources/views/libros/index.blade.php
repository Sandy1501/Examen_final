@extends('layout.plantilla')
@section('title','Usuarios' )
@section('contenido')
<div class="row">
    <div class="col">
        <h1 class="text-center display-4 text-dark" ><strong>Lista de Libros</strong></h1>            
        <a style="color: black;" href="{{route('libros.agregar')}}"><i class="fas fa-users">Agr nuevo libro</i></a>
    </div>
</div>
<div class="row mt-3">
    <div class="col">
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Titulo</th>
                    <th scope="col">Autor</th>
                    <th scope="col">Editorial</th>
                    <th scope="col">Numero Paginas</th>
                    <th scope="col">Libro</th>
                    <th scope="col">Usuario</th>
                    <th scope="col">Ver</th>
                    <th scope="col">Actualizar</th>
                    <th scope="col">Eliminar</th>
                </tr>
            </thead>
            <tbody>
                @foreach($libro as $libros)
                <tr>
                    <th scope="row">{{$libros->id}}</th>
                    <th>{{$libros->titulo}}</th>
                    <th>{{$libros->autor}}</th>
                    <th>{{$libros->editorial}}</th>
                    <th>{{$libros->numero_paginas}}</th>
                    <th>{{$libros->producto}}</th>
                    <th>{{$libros->usuario}}</th>
                    <th>     
                        <button type="button" class="btn btn-info">
                            <a style="color: black;" href="{{route('libros.mostrar', $libros)}}"><i class="fas fa-pen"></i></a>
                        </button>
                    </th>
                    <th>     
                        <button type="button" class="btn btn-warning">
                            <a style="color: black;" href="{{route('libros.actualizar', $libros)}}"><i class="fas fa-pen"></i></a>
                        </button>
                    </th>
                    <th>     
                        <form action="{{route('libros.eliminar', $libros)}}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger" style="color: black;"><i class="fas fa-trash-alt"></i></i></button>
                        </form>
                    </th>
                </tr>
                @endforeach
            </tbody>
        </table>
        
    </div>
</div>
@endsection
@section('pagina')
@endsection