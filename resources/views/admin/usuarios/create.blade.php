@extends('layouts.home')

@section('title', 'Creación del usuario')

@section('content')
  <form action="{{ route('usuario.store') }}" method="POST" class="margin">
      <h1>Creación de usuario</h1>
    @csrf

    <div class="mb-3">
      <label class="form-label">Nombre del usuario</label>
      <input type="text" class="form-control" name="Nombre_U">
    </div>
    <div class="mb-3">
      <label class="form-label">Apellido Paterno</label>
      <input type="text" class="form-control" name="Apellido_p">
    </div>
    <div class="mb-3">
      <label class="form-label">Apellido Materno</label>
      <input type="text" class="form-control" name="Apellido_M">
    </div>
    <div class="mb-3">
      <label class="form-label">Telefono</label>
      <input type="number"  class="form-control" name="Telefono">
    </div>
    <div class="mb-3">
      <label class="form-label">Email</label>
      <input type="email" class="form-control" name="Email">
    </div>
    <div class="mb-3">
      <label class="form-label">Contraseña</label>
      <input type="password" class="form-control" name="Contraseña">
    </div>
    <div class="form-group" id="botones">
		  <button class="btn btn-info" type="submit">Guardar</button>
		  <a class="btn btn-danger" href="{{ URL::previous() }}">Cancelar</a>
	  </div>
    
  </form>
@endsection