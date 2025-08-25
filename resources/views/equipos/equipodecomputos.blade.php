<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Equipos de Computo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="{{ route('equipos.index') }}">Equipos</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <main class="container">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="d-flex justify-content-between mb-3">
            <h2>Lista de Equipos de Computo</h2>
            <a href="{{ route('equipos.create') }}" class="btn btn-primary">➕ Nuevo Equipo</a>
        </div>

        <table class="table table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Procesador</th>
                    <th>RAM</th>
                    <th>Disco Duro</th>
                    <th>Almacenamiento</th>
                    <th>Sistema Operativo</th>
                    <th>Estado</th>
                    <th>Número de Serie</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($equipos as $equipo)
                    <tr>
                        <td>{{ $equipo->id }}</td>
                        <td>{{ $equipo->marca }}</td>
                        <td>{{ $equipo->modelo }}</td>
                        <td>{{ $equipo->procesador }}</td>
                        <td>{{ $equipo->ram }}</td>
                        <td>{{ $equipo->disco_duro }}</td>
                        <td>{{ $equipo->almacenamiento }}</td>
                        <td>{{ $equipo->sistema_operativo }}</td>
                        <td>{{ $equipo->estado }}</td>
                        <td>{{ $equipo->numero_serie }}</td>
                        <td>
                            <a href="{{ route('equipos.edit', $equipo->id) }}" class="btn btn-warning btn-sm">✏️ Editar</a>
                            <form action="{{ route('equipos.destroy', $equipo->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">🗑️ Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
