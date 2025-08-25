@extends('layouts.app')

@section('content')
<div class="container">
    <h2>✏️ Editar Equipo</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('equipos.update', $equipo->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Marca</label>
            <input type="text" name="marca" class="form-control" value="{{ old('marca', $equipo->marca) }}">
        </div>
        <div class="mb-3">
            <label>Modelo</label>
            <input type="text" name="modelo" class="form-control" value="{{ old('modelo', $equipo->modelo) }}">
        </div>
        <div class="mb-3">
            <label>Procesador</label>
            <input type="text" name="procesador" class="form-control" value="{{ old('procesador', $equipo->procesador) }}">
        </div>
        <div class="mb-3">
            <label>RAM</label>
            <input type="text" name="ram" class="form-control" value="{{ old('ram', $equipo->ram) }}">
        </div>
        <div class="mb-3">
            <label>Disco Duro</label>
            <input type="text" name="disco_duro" class="form-control" value="{{ old('disco_duro', $equipo->disco_duro) }}">
        </div>
        <div class="mb-3">
            <label>Almacenamiento</label>
            <input type="text" name="almacenamiento" class="form-control" value="{{ old('almacenamiento', $equipo->almacenamiento) }}">
        </div>
        <div class="mb-3">
            <label>Sistema Operativo</label>
            <input type="text" name="sistema_operativo" class="form-control" value="{{ old('sistema_operativo', $equipo->sistema_operativo) }}">
        </div>
        <div class="mb-3">
            <label>Estado</label>
            <input type="text" name="estado" class="form-control" value="{{ old('estado', $equipo->estado) }}">
        </div>
        <div class="mb-3">
            <label>Número de Serie</label>
            <input type="text" name="numero_serie" class="form-control" value="{{ old('numero_serie', $equipo->numero_serie) }}">
        </div>
        <button type="submit" class="btn btn-success">Actualizar</button>
        <a href="{{ route('equipos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
