@extends('layouts.home')

@section('title', 'Usuarios')

@section('content')

    <h1 style="text-align:center">Lista de los Usuarios</h1>

    <table class="table">
    <thead>
        <tr>
        <th scope="col">Nombre del usuario</th>
        <th scope="col">Apellido Paterno</th>
        <th scope="col">Apellido Materno</th>
        <th scope="col">Telefono</th>
        <th scope="col">Email</th>
        <th scope="col">Editar</th>
        <th scope="col">Eliminar</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($Usuarios as $Usuario)
            <tr>
                <td>
                    {{$Usuario -> Nombre_U}}
                </td>
                <td>
                    {{$Usuario -> Apellido_P}}
                </td>
                <td>
                    {{$Usuario -> Apellido_M}}
                </td>
                <td>
                    {{$Usuario -> Telefono}}
                </td>
                <td>
                    {{$Usuario -> Email}}
                </td>
                <td>
                    <a href="{{route('usuario.edit', $Usuario->id)}}">
                    <i class="fa-solid fa-pen-to-square" style="font-size: 33px;"></i>
                    </a>
                </td>
                <td>
                    <form action="{{route('usuario.destroy', $Usuario->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('¿Desea eliminar?')" class="btn btn-danger" value="Eliminar"><i class="fa-solid fa-trash"></i></button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
    </table>
    <div class="container">        
        <div class="btn-mas">
            <a href="{{route('usuario.create')}}">
                <label for="btn-mas" class="fa fa-plus"></label>
            </a>
        </div>
    </div>
    
@endsection