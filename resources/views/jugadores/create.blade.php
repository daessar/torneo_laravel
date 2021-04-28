@extends('layouts.base')
@section('title','Crear Jugador')
@section('content')
  <section style="min-height: 82vh;">
    <h1 class="text text-center mt-3">Crear Jugador</h1>
    <hr>
    <div class="d-flex justify-content-center text text-center">
      <form action="/jugadores" method="post" enctype="multipart/form-data">
        {{-- necesario cuando se va a enviar un archivo en el documento --}}
        @csrf 
        <div class="form-group">
          <label for="foto">Foto</label>
          <input type="file" class="form-control-file" id="foto" name="foto">
        </div>
        <div class="form-group">
          <label for="nombre">Nombre</label>
          <input type="text" class="form-control" id="nombre" name="nombre">
        </div>
        <div class="form-group">
          <label for="posicion">Posición</label>
          <select class="form-control" id="posicion" name="posicion">
            <option selected>Seleccione una posicion</option>
            <option value="1">Delantero</option>
            <option value="2">Defensa</option>
            <option value="3">Volante</option>
            <option value="4">Lateral Izquierdo</option>
          </select>
        </div>
        <div class="form-group">
          <label for="numero">Número</label>
          <input type="number" class="form-control" id="numero" name="numero">
        </div>
        <div class="form-group">
          <label for="equipo">Equipo</label>
          <select class="form-control" id="equipo" name="equipo">
            <option selected>Seleccione un equipo</option>
            <option value="1">Millonarios</option>
            <option value="2">Once Caldas</option>
            <option value="3">Nacional</option>
            <option value="4">America</option>
          </select>
        </div>
        <button type="submit" class="btn btn-success">Crear</button>
      </form>
    </div>
@endsection