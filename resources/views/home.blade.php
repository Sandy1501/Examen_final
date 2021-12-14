@extends('layouts.app')
@section('content')
<div class="container" style="background: #dfa5cd">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="row">
                <div class="col mt-3">
                    <h1 class="text-center display-4 text-dark" ><strong>Lista de Libros</strong></h1>            
                    <a style="color: black;" href="{{route('libros.agregar')}}"><i class="fas fa-users">   Agregar nuevo libro</i></a>
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
                    <br>
                    <br>
                </div>
            </div>
        </div>
    </div>
</div>
 <!--Footer de redes sociales-->
            <footer class=" container-fluid mt-5 text-center">
                <div class="row justify-content-center py-4" style="height: 250px; background: #cc70b0">
                    <div class="col">
                        <h4>Mas informacion</h4>
                        <p class="text-justify text-center">Esta pagina se dedica a la publicacion de informacion relevante hacerca de libros sistema solar, asi como de todo lo 
                            que habita o más existe en el universo entero, en el poemos apreciar cosas tan bonitas como las estrellas y los
                             los cometas.</p>
                    </div>
                </div>
            </footer>
            <!--footer de final-->
            <footer class="container-fluid">
                <div class="row" style="display: flex; justify-content: space-between; padding: 20px; background: #a07396">
                    <div class="copyringht" style="color: #FAFAFA; text-decoration: none; ">© 2021 Todos los Derechos Reservados | Magtimus </div>
                    <div class="information" style="color:  #FAFAFA">Informacion Compañia | Privacidad de Politica | Terminos y condiciones</a></div>
                </div>
            </footer>
@endsection
