@extends('layouts.panel')

@section('content')
<div class="card shadow">
  <div class="card-header border-0">
    <div class="row align-items-center">
      <div class="col">
        <h3 class="mb-0">Editar Médico</h3>
      </div>
      <div class="col text-ri ght">
        <a href="{{ url('doctors') }}" class="btn btn-sm btn-default">Cancelar y volver</a>
      </div>
    </div>
  </div>
  <div class="card-body">
        @if ($errors->any())
          <div class="alert alert-danger" role="alert">
              <ul>
                @foreach ($errors->all() as $error)
                  <li>
                    {{ $error }}
                  </li>
                @endforeach
              </ul>
            </div>
        @endif
          <form action="{{ url('doctors/'.$doctor->id) }}" method="POST">
            @csrf()
            @method('PUT')
            <div class="form-group">
              <label for="name">Nombre del Médico</label>
              <input type="text" name="name" class="form-control" value="{{ old('name', $doctor->name) }}" required>
            </div>
            <div class="form-group">
              <label for="name">E-mail</label>
              <input type="text" name="email" class="form-control" value="{{ old('email', $doctor->email) }}">
            </div>
            <div class="form-group">
              <label for="name">DNI</label>
              <input type="text" name="dni" class="form-control" value="{{ old('dni', $doctor->dni) }}">
            </div>
            <div class="form-group">
              <label for="name">Dirección</label>
              <input type="text" name="address" class="form-control" value="{{ old('address', $doctor->address) }}">
            </div>
            <div class="form-group">
              <label for="name">Teléfono</label>
              <input type="text" name="phone" class="form-control" value="{{ old('phone', $doctor->phone) }}">
            </div>
            <div class="form-group">
              <label for="password">contraseña</label>
              <input type="text" name="password" class="form-control" value="">
              <p>Ingrese un valor, solo si desea modificar la contraseña</p>
            </div>
            <button type="submit" class="btn btn-primary">
              Guardar              
            </button>
          </form>
      </div>
</div>
@endsection