@extends('layouts.base')
@section('title','Detalle Equipo')
@section('content')
<section style="min-height: 82vh;">
    <h1 class="text text-center mt-5">Detalles del equipo {{ $equipo['nombre'] }}</h1>
    <hr>
    <div class="container">
        <div class="row">
            <div class="col-2">
                <img src="{{ $equipo['escudo'] }}" width="200" height="200">
            </div>
            <div class="col-8">
                <p class="h3">{{ $equipo['nombre'] }}</p>
                <p class="h5">{{ $equipo['dt'] }}</p>
                <p class="h5">Ciudad: {{ $equipo['municipio'] }}</p>
                <a href="#" class="btn btn-danger">Eliminar</a>
                <a href="/equipos/{{ $id }}/edit" class="btn btn-warning">Modificar</a>
                <a href="/equipos" class="btn btn-outline-dark">Ver equipos</a>
            </div>
        </div>
    </div>
@endsection
