@extends('layouts.base')
@section('title','Listado de Equipos')
@section('content')
<section style="min-height: 82vh;">
    <h1 class="text text-center mt-3">Listado de equipos</h1>
    <hr>
    <div class="container">
        <div class="row">
            @foreach ($equipos as $key => $equipo)
            <div class="col-3 text text-center"> 
                <a href="/equipos/{{ $key }}">
                    <img src="{{ $equipo['escudo'] }}" width="200" height="200">
                    <h4 style="color: black">{{ $equipo['nombre'] }}</h4>
                </a>
            </div>
            @endforeach
        </div>
    </div>
@endsection
