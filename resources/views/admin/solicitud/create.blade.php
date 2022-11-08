@extends('layouts.home')

@section('title', 'Agregar libro')

@section('content')
  <form action="{{ route('Solicitud.store') }}" method="POST">
      
    <h1>Solicitud de libro</h1>

    @csrf

    <div class="mb-3">
      <label class="form-label">Nombre del libro</label>
      <input type="text" class="form-control" id="Nombre_libro" name="Nombre_libro">
    </div>
    <div class="mb-3">
      <label class="form-label">Editorial</label>
      <input type="text" class="form-control" id="editorial" name="Editorial">
    </div>
    <div class="mb-3">
      <label class="form-label">Genero</label>
      <input type="text" class="form-control" id="genero" name="Genero">
    </div>
    <div class="mb-3">
      <label class="form-label">Autor</label>
      <input type="text" class="form-control" id="No_paginas" name="Autor">
    </div>
    <div class="mb-3">
      <label class="form-label">Año de edicion</label>
      <input type="number" class="form-control" id="Año_edicion" name="Año_edicion">
    </div>
    <div class="mb-3">
      <label class="form-label">Volumenes</label>
      <input type="number" class="form-control" id="cantidad" name="Volumenes">
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