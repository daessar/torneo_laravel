@extends('layouts.base')
@section('title','Editar Jugadores')
@section('content')
<section style="min-height: 82vh;">
    <h1 class="text text-center mt-5">Detalles Jugadores {{ $id }}</h1>
    <hr>
    <div class="container">
        <div class="row">
            <div class="col-3">
                <img src="{{ $jugador['foto'] }}" width="200" height="250">
            </div>
            <div class="col-8">
                <p class="h3">{{ $jugador['nombre'] }}</p>
                <p class="h5">Posición: {{ $jugador['posicion'] }}</p>
                <p class="h5">Numero: {{ $jugador['numero'] }}</p>
                <p class="h5">Equipo: {{ $jugador['equipo'] }}</p>
                <a href="#" class="btn btn-danger">Eliminar</a>
                <a href="/jugadores/{{ $id }}/edit" class="btn btn-warning">Modificar</a>
                <a href="/jugadores" class="btn btn-outline-dark">Ver jugadores</a>
            </div>
        </div>
    </div>
@endsection
