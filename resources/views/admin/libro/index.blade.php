@extends('layouts.home')

@section('title', 'Libros')

@section('content')
    <div style = "float: left" class="encabezado">
        <h1 >Lista de libros</h1>
    </div>
    <div class="encabezado">
        <button class="btn btn-warning">Agregar libros</button>
    </div>
    
    <table class="table">
    <thead>
        <tr>
        <th scope="col">Nombre del libro</th>
        <th scope="col">Editorial</th>
        <th scope="col">Genero</th>
        <th scope="col">Numero de paginas</th>
        <th scope="col">Año de edicion</th>
        <th scope="col">Cantidad</th>
        <th scope="col">ISBN</th>
        <th scope="col">Editar</th>
        <th scope="col">Eliminar</th>
        </tr>
    </thead>
    <tbody>
        @foreach($Libros as $Libro)
            <tr>
                <td>
                    {{ $Libro->Nombre_libro }}
                </td>
                <td>
                    {{ $Libro->editorial}}
                </td>
                <td>
                    {{ $Libro->genero}}
                </td>
                <td>
                    {{ $Libro->No_paginas}}
                </td>
                <td>
                    {{ $Libro->Año_edicion}}
                </td>
                <td>
                    {{ $Libro->cantidad}}
                </td>
                <td>
                    {{ $Libro->ISBN}}
                </td>
                <td>
                    <a href="{{route('libro.edit', $Libro->id)}}">
                    <i class="fa-solid fa-pen-to-square" style="font-size: 33px;"></i>
                    </a>
                </td>
                <td>
                    <form action="{{ route('libro.destroy', $Libro->id) }}" method="POST">
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
            <a href="{{route('libro.create')}}">
                <label for="btn-mas" class="fa fa-plus"></label>
            </a>
        </div>
    </div>
    
@endsection