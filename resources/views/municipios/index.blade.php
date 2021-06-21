@extends('layouts.base')
@section('title','Listado de Municipios')
@section('content')
<section style="min-height: 82vh;">
    <h1 class="text text-center mt-3">Listado de Municipios</h1>
    <hr>
    <div class="container">
        @if(session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status')}}
            </div>
        @endif
        <table class="table">
            <thead class="bg-success">
                <tr class="text-center">
                    <th scope="col">Id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Acción</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($municipios as $municipio)
                <tr class="text-center">
                    <td>{{ $municipio->id }}</td>
                    <td>{{ $municipio->nombre }}</td>
                    <td>
                        <a href="/municipios/{{ $municipio->id }}/edit" class="btn btn-success active" aria-current="page"><i class="fas fa-marker"></i></a>
                        <form action="/municipios/{{$municipio->id}}" method="POST" class="d-inline">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection