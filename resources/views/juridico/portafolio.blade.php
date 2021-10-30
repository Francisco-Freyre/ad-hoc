@extends('layouts.app')

@section('content')
<h1 class="text-center">Portafolio de imagenes</h1>
<div class="container">
    <div class="form-group">
        <h5 class="text-center">Imagen 1</h5>
        <form action="/portafolio/1" enctype="multipart/form-data" method="POST">
            @csrf
            @method('put')
            <input class="form-control" type="text" name="texto1" placeholder="ingrese nombre:">
            <input class="form-control-fi" type="file" name="imagen1">
            <input class="form-control" type="text" name="descripcion1" placeholder="Descripcion">
            <button class="btn btn-primary" type="submit">GUARDAR</button>
        </form>
    </div>
    
    <div class="form-group">
        <h5 class="text-center">Imagen 2</h5>
        <form action="/portafolio/2" enctype="multipart/form-data" method="POST">
            @csrf
            @method('put')
            <input class="form-control" type="text" name="texto1" placeholder="ingrese nombre:">
            <input class="form-control-fi" type="file" name="imagen1">
            <input class="form-control" type="text" name="descripcion1" placeholder="Descripcion">
            <button class="btn btn-primary" type="submit">GUARDAR</button>
        </form>
    </div>

   <div class="form-group">
        <h5 class="text-center">Imagen 3</h5>
        <form action="/portafolio/3" enctype="multipart/form-data" method="POST">
            @csrf
            @method('put')
            <input class="form-control" type="text" name="texto1" placeholder="ingrese nombre:">
            <input class="form-control-fi" type="file" name="imagen1">
            <input class="form-control" type="text" name="descripcion1" placeholder="Descripcion">
            <button class="btn btn-primary" type="submit">GUARDAR</button>
        </form>
    </div>

    <div class="form-group">
        <h5 class="text-center">Imagen 4</h5>
        <form action="/portafolio/4" enctype="multipart/form-data" method="POST">
            @csrf
            @method('put')
            <input class="form-control" type="text" name="texto1" placeholder="ingrese nombre:">
            <input class="form-control-fi" type="file" name="imagen1">
            <input class="form-control" type="text" name="descripcion1" placeholder="Descripcion">
            <button class="btn btn-primary" type="submit">GUARDAR</button>
        </form>
    </div>

    <div class="form-group">
        <h5 class="text-center">Imagen 5</h5>
        <form action="/portafolio/5" enctype="multipart/form-data" method="POST">
            @csrf
            @method('put')
            <input class="form-control" type="text" name="texto1" placeholder="ingrese nombre:">
            <input class="form-control-fi" type="file" name="imagen1">
            <input class="form-control" type="text" name="descripcion1" placeholder="Descripcion">
            <button class="btn btn-primary" type="submit">GUARDAR</button>
        </form>
    </div>

    <div class="form-group">
        <h5 class="text-center">Imagen 6</h5>
        <form action="/portafolio/6" enctype="multipart/form-data" method="POST">
            @csrf
            @method('put')
            <input class="form-control" type="text" name="texto1" placeholder="ingrese nombre:">
            <input class="form-control-fi" type="file" name="imagen1">
            <input class="form-control" type="text" name="descripcion1" placeholder="Descripcion">
            <button class="btn btn-primary" type="submit">GUARDAR</button>
        </form>
    </div>
</div>
    
@endsection