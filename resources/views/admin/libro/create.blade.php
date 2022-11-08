@extends('layouts.home')

@section('title', 'Agregar libro')

@section('content')
  <form action="{{ route('libro.store') }}" method="POST">
      
    <h1>Crear libro</h1>

    @csrf

    <div class="mb-3">
      <label class="form-label">Nombre del libro</label>
      <input type="text" class="form-control" id="Nombre_libro" name="Nombre_libro">
    </div>
    <div class="mb-3">
      <label class="form-label">Editorial</label>
      <input type="text" class="form-control" id="editorial" name="editorial">
    </div>
    <div class="mb-3">
      <label class="form-label">Genero</label>
      <input type="text" class="form-control" id="genero" name="genero">
    </div>
    <div class="mb-3">
      <label class="form-label">No. paginas</label>
      <input type="number" class="form-control" id="No_paginas" name="No_paginas">
    </div>
    <div class="mb-3">
      <label class="form-label">Año de edicion</label>
      <input type="number" class="form-control" id="Año_edicion" name="Año_edicion">
    </div>
    <div class="mb-3">
      <label class="form-label">Cantidad</label>
      <input type="number" class="form-control" id="cantidad" name="cantidad">
    </div>
    <div class="mb-3">
      <label class="form-label">ISBN</label>
      <input type="text" class="form-control" id="ISBN" name="ISBN">
    </div>
    <div class="form-group">
      <button class="btn btn-info" type="submit">Guardar</button>
      <a class="btn btn-danger" href="{{ URL::previous() }}">Cancelar</a>
    </div>
    
  </form>
@endsection