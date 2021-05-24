@extends('layouts.base')
@section('title','Listado de Jugadores')
@section('content')
<section style="min-height: 82vh;">
    <h1 class="text text-center mt-3">Listado de Jugadores</h1>
    <hr>
    <div class="container">
        @if(session('status'))
        <div class="alert alert-success" role="alert">
            Jugador creado exitosamente!
        </div>
        @endif
        <table class="table">
            <thead class="bg-success">
                <tr class="text-center">
                <th scope="col">Foto</th>
                <th scope="col">Nombre</th>
                <th scope="col">Posición</th>
                <th scope="col">Numero</th>
                <th scope="col">Equipo</th>
                <th scope="col">Acción</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($jugadores as $jugador)
                <tr class="text-center">
                    <td><img src="{{ asset('image/jugadores/' . $jugador->foto) }}" width="45" height="45"></td>
                    <td>{{ $jugador->nombre }}</td>
                    <td>{{ $jugador->posicion["nombre"] }}</td>
                    <td>{{ $jugador->numero }}</td>
                    <td>{{ $jugador->equipo["nombre"] }}</td>
                    <td>
                        <a href="/jugadores/{{ $jugador->id }}" class="btn btn-warning active" aria-current="page"><i class="fas fa-eye"></i></a>
                        <a href="/jugadores/{{ $jugador->id }}/edit" class="btn btn-primary active" aria-current="page"><i class="fas fa-marker"></i></a>
                        <a href="#" class="btn btn-danger active" aria-current="page"><i class="far fa-trash-alt"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection