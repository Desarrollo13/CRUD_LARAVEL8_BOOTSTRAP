@extends('adminlte::page')

@section('title', 'CRUD en laravel 8')

@section('content_header')
    <h1>Editar articulo</h1>
@stop

@section('content')
<form action="/articulos/{{$articulo->id}}" method="post">
    <!-- @csrf esta normativa es para solucionar el problema de error 404 -->
    @csrf

    @method('PUT')

    <div class="mb-3">
        <label for="" class="form-label">Código</label>
        <input name="codigo" type="text" class="form-control" id="codigo" value="{{$articulo->codigo}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Descripción</label>
        <input name="descripcion" class="form-control" type="text" id="descripcion" value="{{$articulo->descripcion}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Cantidad</label>
        <input name="cantidad" class="form-control" type="number" id="cantidad" value="{{$articulo->cantidad}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Precio</label>
        <input name="precio" class="form-control form-control-sm" id="precio" type="number" step="any"  value="0.00" value="{{$articulo->precio}}">
    </div>
    <!-- vamos a colocar los botones aceptar y cancelar -->
    <a href="/articulos" class="btn btn-secondary" tabindex="5" >Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4" >Guardar</button>


</form>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
   
@stop