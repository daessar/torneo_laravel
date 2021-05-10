@extends('layouts.base')
@section('title','Crear Posición')
@section('content')
  <section style="min-height: 82vh;">
    <h1 class="text text-center mt-3">Crear Posición</h1>
    <hr>
    <div class="d-flex justify-content-center text text-center">
      <form action="/posiciones" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="nombre" class="form-label">Nombre de la posicion</label>
          <input type="text" class="form-control" id="nombre" name="nombre">
        </div>
        <button type="submit" class="btn btn-success">Insertar</button>
    </form>
    </div>
@endsection