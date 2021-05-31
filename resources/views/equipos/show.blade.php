@extends('layouts.base')
@section('title','Detalle Equipo')
@section('content')
<section style="min-height: 82vh;">
    <h1 class="text text-center mt-3">Detalles del equipo {{ $equipo['nombre'] }}</h1>
    <hr>
    <div class="container">
        <div class="row">
            <div class="col-2">
                <img src="{{ asset('image/equipos/' . $equipo->escudo) }}" class="img-thumbnail">
            </div>
            <div class="col-8 ms-5">
                <p class="h3">{{ $equipo->nombre }}</p>
                <p class="h5">{{ $equipo->dt }}</p>
                <p class="h5">Ciudad: {{ $equipo->municipio->nombre }}</p>
                <form action="/equipos/{{$equipo->id}}" method="POST" class="d-inline">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
                <a href="/equipos/{{ $id }}/edit" class="btn btn-warning">Modificar</a>
                <a href="/equipos" class="btn btn-outline-dark">Ver equipos</a>
            </div>
        </div>
    </div>
@endsection
