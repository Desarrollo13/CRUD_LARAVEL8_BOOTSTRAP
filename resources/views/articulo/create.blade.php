@extends('layouts.plantillabase');

@section('contenido')

<h2>CREAR REGISTROS</h2>

<form action="/articulos" method="post">
<!-- @csrf esta normativa es para solucionar el problema de error 404 -->
    @csrf

    <div class="mb-3">
        <label for="" class="form-label">Código</label>
        <input name="codigo" type="text" class="form-control" id="codigo" tabindex="1">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Descripción</label>
        <input name="descripcion" class="form-control" type="text" id="descripcion" tabindex="2">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Cantidad</label>
        <input name="cantidad" class="form-control" type="number" id="cantidad" tabindex="3">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Precio</label>
        <input name="precio" class="form-control form-control-sm" id="precio" type="number" step="any"  value="0.00" tabindex="4">
    </div>
    <!-- vamos a colocar los botones aceptar y cancelar -->
    <a href="/articulos" class="btn btn-secondary" tabindex="5" >Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="4" >Guardar</button>


</form>


@endsection