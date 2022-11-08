@extends('layouts.home')

@section('title', 'Solicitud de libros')

@section('content')
    
    <h1>Lista de los libros solicitados</h1>

    <table class="table">
    <thead>
        <tr>
        <th scope="col">Nombre del libro</th>
        <th scope="col">Editorial</th>
        <th scope="col">Genero</th>
        <th scope="col">Autor</th>
        <th scope="col">Año de edición</th>
        <th scope="col">Volumenes</th>
        <th scope="col">ISBN</th>
        <th scope="col">Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach($Solicituds as $Solicitud)
            <tr>
                <td>
                   {{$Solicitud->Nombre_libro}}
                </td>
                <td>
                   {{$Solicitud->Editorial}}
                </td>
                <td>
                   {{$Solicitud->Genero}}
                </td>
                <td>
                    {{$Solicitud->Autor}}
                </td>
                <td>
                    {{$Solicitud->Año_edicion}}
                </td>
                <td>
                    {{$Solicitud->Volumenes}}
                </td>
                <td>
                    {{$Solicitud->ISBN}}
                </td>
                <td>
                    
                </td>
            </tr>
        @endforeach
    </tbody>
    </table>
    <div class="container">        
        <div class="btn-mas">
            <a href="{{route('Solicitud.create')}}">
                <label for="btn-mas" class="fa fa-plus"></label>
            </a>
        </div>
    </div>
    
@endsection