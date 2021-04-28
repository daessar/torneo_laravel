@extends('layouts.base')
@section('title','Crear Equipo')
@section('content')
  <section style="min-height: 82vh;">
    <h1 class="text text-center mt-3">Crear equipos</h1>
    <hr>
    <div class="d-flex justify-content-center text text-center">
      <form action="/equipos" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="nombre">Nombre</label>
          <input type="text" class="form-control" id="nombre" name="nombre">
        </div>
        <div class="form-group">
          <label for="dt">D.T.</label>
          <input type="text" class="form-control" id="dt" name="dt">
        </div>
        <div class="form-group">
          <label for="municipio">Municipio</label>
          <select class="form-control" id="municipio" name="municipio">
            <option value="1">Manizales</option>
            <option value="2">Pereira</option>
            <option value="3">Armenia</option>
          </select>
        </div>
        <div class="form-group">
          <label for="escudo">Escudo</label>
          <input type="file" class="form-control-file" id="escudo" name="escudo">
        </div>
        <button type="submit" class="btn btn-success">Crear</button>
      </form>
    </div>
@endsection