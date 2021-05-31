@extends('layouts.base')
@section('title','Editar Jugadores')
@section('content')
<section style="min-height: 82vh;">
    <h1 class="text text-center mt-3">Detalles {{ $jugador->nombre }}</h1>
    <hr>
    <div class="container">
        <div class="row">
            <div class="col-3">
                <img src="{{ asset('image/jugadores/' . $jugador->foto) }}" class="img-thumbnail">
            </div>
            <div class="col-8">
                <p class="h3">{{ $jugador->nombre }}</p>
                <p class="h5">Posición: {{ $jugador->posicion->nombre }}</p>
                <p class="h5">Numero: {{ $jugador->numero }}</p>
                <p class="h5">Equipo: {{ $jugador->equipo->nombre }}</p>
                <a href="#" class="btn btn-danger">Eliminar</a>
                <a href="/jugadores/{{ $id }}/edit" class="btn btn-warning">Modificar</a>
                <a href="/jugadores" class="btn btn-outline-dark">Ver jugadores</a>
            </div>
        </div>
    </div>
@endsection
