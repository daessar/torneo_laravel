@extends('layouts.base')
@section('title','Editar Equipo')
@section('content')
<section style="min-height: 82vh;">
    <h1 class="text text-center mt-5">Modificar {{ $equipo-> nombre }}</h1>
    <hr>
    <div class="d-flex justify-content-center text text-center">
        <form action="/equipos/{{$equipo->id}}" method="post" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="form-group">
          <label for="nombre">Nombre</label>
          <input type="text" class="form-control" id="nombre" name="nombre" value="{{$equipo->nombre}}">
          @error('nombre')
            <small style="color: red">{{ $message }}</small>
          @enderror
        </div>
        <div class="form-group">
          <label for="dt">D.T.</label>
          <input type="text" class="form-control" id="dt" name="dt" value="{{$equipo->dt}}">
          @error('dt')
            <small style="color: red">{{ $message }}</small>
          @enderror
        </div>
        <div class="form-group">
          <label for="municipio">Municipio</label>
          <select class="form-control" id="municipio" name="municipio">
            <option selected>Seleccione un municipio</option>
            @foreach($municipios as $municipio)
            <option value="{{ $municipio->id }}"@if($municipio->id == $equipo->municipio_id) selected @endif>{{ $municipio->nombre}}</option>
            @endforeach
          </select>
          @error('municipio')
            <small style="color: red">{{ $message }}</small>
          @enderror
        </div>
        <div class="form-group">
          <label for="escudo">Escudo</label>
          <input type="file" class="form-control-file" id="escudo" name="escudo">
          @error('escudo')
            <small style="color: red">{{ $message }}</small>
          @enderror
        </div>
        <button type="submit" class="btn btn-success">Actualizar</button>
      </form>
    </div>
@endsection
