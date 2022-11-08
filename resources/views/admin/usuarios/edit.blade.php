@extends('layouts.home')

@section('title', 'Editar del usuario')

@section('content')
  <form action="{{ route('usuario.update', $Usuarios->id) }}" method="POST">
    
    <h1>Editar de usuario</h1>

    @csrf
    @method('PUT')

    <div class="mb-3">
      <label class="form-label">Nombre del usuario</label>
      <input type="text" class="form-control" name="Nombre_U" value="{{$Usuarios->Nombre_U}}">
    </div>
    <div class="mb-3">
      <label class="form-label">Apellido Paterno</label>
      <input type="text" class="form-control" name="Apellido_p" value="{{$Usuarios->Apellido_P}}">
    </div>
    <div class="mb-3">
      <label class="form-label">Apellido Materno</label>
      <input type="text" class="form-control" name="Apellido_M" value="{{$Usuarios->Apellido_M}}">
    </div>
    <div class="mb-3">
      <label class="form-label">Telefono</label>
      <input type="number"  class="form-control" name="Telefono" value="{{$Usuarios->Telefono}}">
    </div>
    <div class="mb-3">
      <label class="form-label">Email</label>
      <input type="email" class="form-control" name="Email" value="{{$Usuarios->Email}}">
    </div>
    <div class="mb-3">
      <label class="form-label">Contraseña</label>
      <input type="password" class="form-control" name="Contraseña" value="{{$Usuarios->contraseña}}">
    </div>
    <div class="form-group">
		  <button class="btn btn-info" type="submit">Guardar</button>
		  <a class="btn btn-danger" href="{{ URL::previous() }}">Cancelar</a>
	</div>
    
  </form>
@endsection