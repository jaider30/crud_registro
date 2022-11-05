@extends('layouts.plantillabase2');

@section('contenido2')



<h2>Editar registro</h2>

<form action="/clientes/{{$cliente->id}}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input type="text" id="nombre" name="nombre" class="form-control" value="{{$cliente->nombre}}">

    </div>
    <div class="mb-3">
        <label for="" class="form-label">Apellido</label>
        <input type="text" id="apellido" name="apellido" class="form-control" value="{{$cliente->apellido}}">

    </div>
    <div class="mb-3">
        <label for="" class="form-label">Edad</label>
        <input type="number" id="edad" name="edad" class="form-control" value="{{$cliente->edad}}">

   

    <a href="/clientes" class="btn btn-secondary">Cancelar</a>
    <button type="submit" class="btn btn-primary">Guardar</button>









</form>


@endsection