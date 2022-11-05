@extends('layouts.plantillabase');

@section('contenido')



<h2>Editar registro</h2>

<form action="/registros/{{$registro->id}}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input type="text" id="nombre" name="nombre" class="form-control" value="{{$registro->nombre}}">

    </div>
    <div class="mb-3">
        <label for="" class="form-label">Apellido</label>
        <input type="text" id="apellido" name="apellido" class="form-control" value="{{$registro->apellido}}">

    </div>
    <div class="mb-3">
        <label for="" class="form-label">Correo</label>
        <input type="text" id="Correo" name="correo" class="form-control" value="{{$registro->correo}}">

    </div>
    <div class="mb-3">
        <label for="" class="form-label">Contraseña</label>
        <input type="password" id="contraseña" name="contraseña" class="form-control" value="{{$registro->contraseña}}">

    </div>
    
    <div class="mb-4 float-right">

        <select class="selectpicker btn btn-outline-success " name="rol" id="rol">
        <option>Rol</option>
        <option>Admin</option>
        <option>Empleado</option>
        
        </select>

    </div>

    <a href="/registros" class="btn btn-secondary">Cancelar</a>
    <button type="submit" class="btn btn-primary">Guardar</button>









</form>


@endsection