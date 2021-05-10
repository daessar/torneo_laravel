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
          @error('foto')
            <small>{{ $message }}</small>
          @enderror
        </div>
        <div class="form-group">
          <label for="nombre">Nombre</label>
          <input type="text" class="form-control" id="nombre" name="nombre">
          @error('nombre')
            <small>{{ $message }}</small>
          @enderror
        </div>
        <div class="form-group">
          <label for="posicion">Posición</label>
          <select class="form-control" id="posicion" name="posicion">
            <option selected>Seleccione una posicion</option>
            @foreach($posiciones as $posicion)
            <option value="{{ $posicion->id}}">{{$posicion->nombre}}</option>
            @endforeach
          </select>
          @error('posicion')
            <small>{{ $message }}</small>
          @enderror
        </div>
        <div class="form-group">
          <label for="numero">Número</label>
          <input type="number" class="form-control" id="numero" name="numero">
          @error('numero')
            <small>{{ $message }}</small>
          @enderror
        </div>
        <div class="form-group">
          <label for="equipo">Equipo</label>
          <select class="form-control" id="equipo" name="equipo">
            <option selected>Seleccione un equipo</option>
            @foreach($equipos as $equipo)
            <option value="{{ $equipo->id}}">{{$equipo->nombre}}</option>
            @endforeach
          </select>
          @error('equipo')
            <small>{{ $message }}</small>
          @enderror
        </div>
        <button type="submit" class="btn btn-success">Crear</button>
      </form>
    </div>
@endsection