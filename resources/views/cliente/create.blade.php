@extends('layouts.plantillabase2');

@section('contenido2')
<h2>Crear Registro</h2>


<form action="/clientes" method="POST">
    @csrf
    <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input id="nombre" type="text" name="nombre" class="form-control" tabindex="1">

    </div>
    <div class="mb-3">
        <label for="" class="form-label">Apellido</label>
        <input id="apellido" type="text" name="apellido" class="form-control" tabindex="2">

    </div>
    <div class="mb-3">
        <label for="" class="form-label">Edad</label>
        <input id="edad" type="number" name="edad" class="form-control" tabindex="3">

    

    <div>
        
    </div>


    <br>



    <a  href="/clientes" class="btn btn-secondary " tabindex="4">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="5">Guardar</button>

@endsection