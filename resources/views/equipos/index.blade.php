@extends('layouts.base')
@section('title','Listado de Equipos')
@section('content')
<section style="min-height: 82vh;">
    @if(session('status'))
    <div class="alert alert-success" role="alert">
        Equipo creado exitosamente!
    </div>
    @endif
    <h1 class="text text-center mt-3">Listado de equipos</h1>
    <hr>
    <div class="container">
        <div class="row">
            @foreach ($equipos as $equipo)
            <div class="col-3 text text-center mb-5">
                <a href="/equipos/{{ $equipo->id }}">
                    <img src="{{ asset('image/equipos/' . $equipo->escudo) }}" width="200" height="200">
                    <h4 style="color: black">{{ $equipo ->nombre }}</h4>
                </a>
            </div>
            @endforeach
        </div>
    </div>
@endsection
