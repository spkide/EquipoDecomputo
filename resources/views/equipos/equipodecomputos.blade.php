@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Lista de Equipos</h1>

    <a href="{{ route('equipos.create') }}" class="btn btn-primary mb-3">➕ Nuevo Equipo</a>

    @if ($equipos->count())
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($equipos as $equipo)
                    <tr>
                        <td>{{ $equipo->id }}</td>
                        <td>{{ $equipo->nombre }}</td>
                        <td>{{ $equipo->descripcion }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No hay equipos registrados.</p>
    @endif
</div>
@endsection
