@extends('layouts.plantillabase');

@section('contenido')
<a href="registros/create" class="btn btn-primary my-4" >Registrar</a>


<table class="table table-dark table-sm mt-4">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Correo</th>
            <th scope="col">Contraseña</th>
            <th scope="col">Rol</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($registros as $registro)
        <tr>
            <td>{{ $registro->id}}</td>
            <td>{{ $registro->nombre}}</td>
            <td>{{ $registro->apellido}}</td>
            <td>{{ $registro->correo}}</td>
            <td>{{ $registro->contraseña}}</td>
            <td>{{ $registro->rol}}</td>
            <td>
                <form action=" {{ route ('registros.destroy',$registro->id)}}" method="POST">

                
                
                <a href="/registros/{{ $registro->id}}/edit" class="btn btn-info">Editar</a>
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger">Borrar</button>
                
                </form>
            </td>
        </tr>
        
        @endforeach
    </tbody>

</table>
@endsection