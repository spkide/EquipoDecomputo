<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equipos de Cómputo - Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1 class="mb-4">📋 Panel de Equipos de Cómputo</h1>

    <a href="{{ route('equipos.create') }}" class="btn btn-success mb-3">+ Agregar Nuevo Equipo</a>
    <a href="{{ route('equipos.index') }}" class="btn btn-primary mb-3">Ver Todos los Equipos</a>

    <div class="card">
        <div class="card-header">
            Resumen de Equipos
        </div>
        <div class="card-body">
            <p>Total de equipos registrados: <strong>{{ $equipos->count() }}</strong></p>
            <p>Equipos activos: <strong>{{ $equipos->where('estado', 'Activo')->count() }}</strong></p>
            <p>Equipos inactivos: <strong>{{ $equipos->where('estado', 'Inactivo')->count() }}</strong></p>
        </div>
    </div>

    <hr>

    <h3>Últimos equipos agregados</h3>
    <table class="table table-bordered table-striped mt-2">
        <thead>
            <tr>
                <th>ID</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($equipos->take(5) as $equipo)
                <tr>
                    <td>{{ $equipo->id }}</td>
                    <td>{{ $equipo->marca }}</td>
                    <td>{{ $equipo->modelo }}</td>
                    <td>{{ $equipo->estado }}</td>
                    <td>
                        <a href="{{ route('equipos.show', $equipo->id) }}" class="btn btn-info btn-sm">Ver</a>
                        <a href="{{ route('equipos.edit', $equipo->id) }}" class="btn btn-warning btn-sm">Editar</a>
                    </td>
                </tr>
            @endforeach

            @if($equipos->isEmpty())
                <tr>
                    <td colspan="5" class="text-center">No hay equipos registrados.</td>
                </tr>
            @endif
        </tbody>
    </table>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
