@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card-body">
         @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
         @endif
    </div>
</div>
    <div class="jumbotron jumbotron-fluid" style="background: #dfa5cd">
        <h1 class="display-4 text-center">Datos de libros</h1>
        <div class="container">                                                               
            <p class="lead">
                <div class="card mt-3"> 
                    <div class="card-body" style="background: #db91c4">
                        <p><strong>Titulo del Libro: </strong>{{$libro->titulo}}</p>
                        <p><strong>Autor: </strong>{{$libro->autor}}</p>
                        <p><strong>Editorial: </strong>{{$libro->editorial}}</p>
                        <p><strong>Numero de paginas: </strong>{{$libro->numero_paginas}}</p>
                        <p><strong>Libro: </strong>{{$libro->producto}}</p>
                        <p><strong>Usuario: </strong>{{$libro->usuario}}</p>
                    </div>
                </div>
            </p>    
        </div>
        <div class="container-fluid mt-3">
            <div class="row">
                <div class="col-2"></div>
                <div class="col-4">           
                    <a href="{{route('home', $libro)}}" class="btn btn-danger"><i class='fas fa-reply-all'>Regresar</i></a>
                </div>
                <div class="col-2"></div>
                <div class="col-4"> 
                    <a href="{{route('libros.actualizar', $libro)}}" class="btn btn-warning"><i class="far fa-edit"> Editar</i></a>
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