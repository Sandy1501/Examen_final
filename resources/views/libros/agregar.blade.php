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
<div class="card" style="background: #cc70b0">
    <div class="col">
        <br>
        <h1 class="display-4 text-center" style="color: rgb(0, 255, 242);">Agregar Registro</h1>
    </div>
    <div class="col mt-4">
        <div class="card-body">
            <form action="{{route('libros.store')}}" method="post" enctype="multipart/form-data" style="color: rgb(28, 177, 242);">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="titulo">Titulo:</label>
                        <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Titulo">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="autor">Autor:</label>
                        <input type="text" class="form-control" id="autor" name="autor" placeholder="Autor">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="nombre">Editorial:</label>
                        <input type="text" class="form-control" id="editorial" name="editorial" placeholder="Editorial">
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="numero_paginas">Numero de Paginas:</label>
                    <input type="number" class="form-control" id="numero_paginas" name="numero_paginas">
                </div>
                <br>
                <div class="form-group col-md-6">
                    <input type="file" class="form-control-file" id="producto" name="producto">
                </div>
                <div class="form-group col-md-4">
                    <label for="usuario">Usuario</label>
                    <input type="text" class="form-control" id="usuario" name="usuario" placeholder="usuario">
                </div>
            </div>
                <button type="submit" class="btn btn-info" id="btn_agregar">Agregar</button>
                <br>
                <br>
            </form>
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
            <br>
        </div>
    </div>
</div>
@endsection
>