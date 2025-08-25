<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Equipo</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1 class="mb-4">🔍 Detalles del Equipo</h1>

    <a href="{{ route('equipos.index') }}" class="btn btn-primary mb-3">← Volver al listado</a>
    <a href="{{ route('equipos.edit', $equipo->id) }}" class="btn btn-warning mb-3">✏️ Editar Equipo</a>

    <div class="card">
        <div class="card-header">
            Información del Equipo
        </div>
        <div class="card-body">
            <p><strong>ID:</strong> {{ $equipo->id }}</p>
            <p><strong>Marca:</strong> {{ $equipo->marca }}</p>
            <p><strong>Modelo:</strong> {{ $equipo->modelo }}</p>
            <p><strong>Procesador:</strong> {{ $equipo->procesador }}</p>
            <p><strong>RAM:</strong> {{ $equipo->ram }} GB</p>
            <p><strong>Almacenamiento:</strong> {{ $equipo->almacenamiento }} GB</p>
            <p><strong>Estado:</strong> {{ $equipo->estado }}</p>
            <p><strong>Fecha de registro:</strong> {{ $equipo->created_at->format('d/m/Y H:i') }}</p>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
