@extends('layouts.base')
@section('title','Editar Posición')
@section('content')
<section style="min-height: 82vh;">
    <h1 class="text text-center mt-3">Modificar Posición</h1>
    <hr>
    <div class="d-flex justify-content-center text text-center">
    <form action="/posiciones/{{$posicion->id}}" method="post" enctype="multipart/form-data">
      @method('PUT')
      @csrf
      <div class="mb-3">
        <label for="nombre" class="form-label">Nombre de la posición</label>
        <input type="text" class="form-control" id="nombre" name="nombre" value="{{$posicion->nombre}}">
        @error('nombre')
            <small style="color: red">{{ $message }}</small>
          @enderror
      </div>
      <button type="submit" class="btn btn-success">Insertar</button>
    </form>
  </div>
@endsection
