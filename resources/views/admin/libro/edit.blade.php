@extends('layouts.home')

@section('title', 'Editar libro')

@section('content')
  <form action="{{route('libro.update', $Libros->id)}}" method="POST">
  
    <h1>Editar libro</h1>

    @csrf
    @method('PUT')

    <div class="mb-3">
      <label class="form-label">Nombre del libro</label>
      <input type="text" class="form-control" id="Nombre_libro" name="Nombre_libro" value="{{$Libros->Nombre_libro}}">
    </div>
    <div class="mb-3">
      <label class="form-label">Editorial</label>
      <input type="text" class="form-control" id="editorial" name="editorial" value="{{$Libros->editorial}}">
    </div>
    <div class="mb-3">
      <label class="form-label">Genero</label>
      <input type="text" class="form-control" id="genero" name="genero" value="{{$Libros->genero}}">
    </div>
    <div class="mb-3">
      <label class="form-label">No. paginas</label>
      <input type="number" class="form-control" id="No_paginas" name="No_paginas" value="{{$Libros->No_paginas}}">
    </div>
    <div class="mb-3">
      <label class="form-label">Año de edicion</label>
      <input type="number" class="form-control" id="Año_edicion" name="Año_edicion" value="{{$Libros->Año_edicion}}">
    </div>
    <div class="mb-3">
      <label class="form-label">Cantidad</label>
      <input type="number" class="form-control" id="cantidad" name="cantidad" value="{{$Libros->cantidad}}">
    </div>
    <div class="mb-3">
      <label class="form-label">ISBN</label>
      <input type="text" class="form-control" id="ISBN" name="ISBN" value="{{$Libros->ISBN}}">
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
    
  </form>
@endsection