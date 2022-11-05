@extends('layouts.plantillabase');

@section('contenido')
<h2>Crear Registro</h2>


<form action="/registros" method="POST">
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
        <label for="" class="form-label">Correo</label>
        <input id="correo" type="text" name="correo" class="form-control" tabindex="3">

    </div>
    <div class="mb-3">
        <label for="" class="form-label">Contraseña</label>
        <input id="contraseña" type="password" name="contraseña" class="form-control" tabindex="4">

    </div >
    <!-- <div class="dropdown mb-4">
        <button type="button" class="btn btn-primary selectpicker " id="darkbutton"
        data-bs-toggle="dropdown" aria-expanded="false">

            Rol :
        </button>
        <ul class="dropdown-menu">
            <li><a href="#" class="dropdown-item">Administrador</a></li>
            <li><a href="#" class="dropdown-item">Empleado</a></li>
        </ul>
    </div>
    <div>
        <select class="selectpicker">
        <option data-content="<span class='badge badge-success'>Relish</span>">Relish</option>
        </select>

    </div> -->
    <div class="mb-4 float-right">

        <select class="selectpicker btn btn-outline-success " name="rol" id="rol">
        <option>Rol</option>
        <option>Admin</option>
        <option>Empleado</option>
        
        </select>

    </div>
    <div>
        
    </div>


    



    <a href="/registros" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="6">Guardar</button>




</form>



@endsection