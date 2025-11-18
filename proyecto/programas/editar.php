<?php
$conn = mysqli_connect("localhost", "root", "", "ligas_db");
$id=$_GET['id'];
$res=mysqli_query($conn, "SELECT * FROM datosliga WHERE id=$id");
$fila=mysqli_fetch_assoc($res);
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Editar equipo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container mt-4">
    <h2>Editar equipo</h2>
    <form action="actualizarLigas.php" method="POST">
      <input type="hidden" name="id" value="<?= $fila['id'] ?>">

      <div class="mb-3">
        <label class="form-label">Posición</label>
        <input type="number" name="posicion" class="form-control" value="<?= $fila['posicion'] ?>">
      </div>
      <div class="mb-3">
        <label class="form-label">Nombre del Equipo</label>
        <input type="text" name="nombredelequipo" class="form-control" value="<?= $fila['nombredelequipo'] ?>">
      </div>
      <div class="mb-3">
        <label class="form-label">Puntos</label>
        <input type="number" name="puntos" class="form-control" value="<?= $fila['puntos'] ?>">
      </div>

      <button type="submit" class="btn btn-primary">Actualizar</button>
      <a href="torneos.php" class="btn btn-secondary">Volver</a>
    </form>
  </div>
</body>
</html>
