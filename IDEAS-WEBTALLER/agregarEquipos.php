<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Agregar equipo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container mt-4">
    <h2>Agregar nuevo equipo</h2>
    <form action="insertarLigas.php" method="POST">
      <div class="mb-3">
        <label class="form-label">Posición</label>
        <input type="number" name="posicion" class="form-control" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Nombre del Equipo</label>
        <input type="text" name="nombredelequipo" class="form-control" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Puntos</label>
        <input type="number" name="puntos" class="form-control" required>
      </div>
      <button type="submit" class="btn btn-success">Guardar</button>
      <a href="torneos.php" class="btn btn-secondary">Volver</a>
    </form>
  </div>
</body>
</html>
