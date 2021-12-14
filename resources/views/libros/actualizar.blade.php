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
<div class="jumbotron jumbotron-fluid" style="background: #cc70b0">
    <div class="container">
        <h1 class="display-4 text-center" style="color: rgb(231, 218, 25);">Actualizar datos</h1>
        <div class="col mt-4">
            <form action="{{route('libros.update', $libro)}}" method="post" style="color: rgb(231, 166, 25);">
                @csrf
                @method('put')
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="titulo">Titulo:</label>
                        <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Titulo" value="{{$libro->titulo}}">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="autor">Autor:</label>
                        <input type="text" class="form-control" id="autor" name="autor" placeholder="Autor" value="{{$libro->autor}}">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="editorial">Editorial:</label>
                        <input type="text" class="form-control" id="editorial" name="editorial" placeholder="editorial" value="{{$libro->editorial}}">
                    </div>
                </div>
                    <div class="form-group col-md-6">
                        <label for="numero_paginas">Numero de Paginas:</label>
                        <input type="number" class="form-control" id="numero_paginas" name="numero_paginas" value="{{$libro->numero_paginas}}">
                    </div>
                    
                    <div class="form-group col-md-6">
                        <label for="producto">Libro</label>
                        <input type="file" class="form-control-file" id="producto" name="producto" value="{{$libro->producto}}">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="usuario">Usuario:</label>
                        <input type="text" class="form-control" id="usuario" name="usuario" placeholder="usuario" value="{{$libro->usuario}}">
                    </div>
                </div>
                <br>
                <button type="submit" class="btn btn-warning">Actualizar</button>
            </form>
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