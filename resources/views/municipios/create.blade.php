@extends('layouts.base')
@section('title','Crear Municipio')
@section('content')
<section style="heigth:100vh">
  <h1 class="text text-center mt-3">Crear Municipio</h1>
  <hr>
  <div class="d-flex justify-content-center text text-center">
    <form action="/municipios" method="post">
      <div class="mb-3">
        <label for="nombre" class="form-label">Nombre del municipio</label>
        <input type="text" class="form-control" id="nombre" name="nombre">
      </div>
      <button type="submit" class="btn btn-success">Insertar</button>
    </form>
  </div>
</section>
@endsection