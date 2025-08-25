<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equipos de Cómputo</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>💻 Lista de Equipos de Cómputo</h2>

    <a href="{{ route('equipos.create') }}" class="btn btn-success mb-3">+ Agregar Equipo</a>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Procesador</th>
                <th>RAM</th>
                <th>Disco Duro</th>
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
                    <td>{{ $equipo->sistema_operativo }}</td>
                    <td>{{ $equipo->estado }}</td>
                    <td>{{ $equipo->numero_serie }}</td>
                    <td>
                        <a href="{{ route('equipos.show', $equipo->id) }}" class="btn btn-info btn-sm">Ver</a>
                        <a href="{{ route('equipos.edit', $equipo->id) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('equipos.destroy', $equipo->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Seguro que quieres eliminar este equipo?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach

            @if($equipos->isEmpty())
                <tr>
                    <td colspan="10" class="text-center">No hay equipos registrados.</td>
                </tr>
            @endif
        </tbody>
    </table>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
