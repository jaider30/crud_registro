@extends('layouts.plantillabase2');

@section('contenido2')


<a href="clientes/create" class="btn btn-primary my-4" >Registrar</a>


<table class="table table-dark table-sm mt-4">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Edad</th>
            <th scope="col">Acciones</th>
            
        </tr>
    </thead>
    <tbody>
        @foreach ($clientes as $cliente)
        <tr>
            <td>{{ $cliente->id}}</td>
            <td>{{ $cliente->nombre}}</td>
            <td>{{ $cliente->apellido}}</td>
            <td>{{ $cliente->edad}}</td>

            <td>
                <form action=" {{ route ('clientes.destroy',$cliente->id)}}" method="POST">

                
                
                <a href="/clientes/{{ $cliente->id}}/edit" class="btn btn-info">Editar</a>
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