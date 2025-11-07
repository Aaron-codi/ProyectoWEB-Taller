<?php
$conn = mysqli_connect("localhost", "root", "", "ligas_db");
$resultado = mysqli_query($conn, "SELECT * FROM datosliga ORDER BY posicion ASC");
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Torneos</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <main>
    <div class="caja">
      <h2>Tabla de Ligas</h2>
      <table class="table table-bordered table-striped" style="background:white;">
        <thead class="table-primary">
          <tr>
            <th>Posición</th>
            <th>Nombre del Equipo</th>
            <th>Puntos</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
          <?php while ($fila = mysqli_fetch_assoc($resultado)) { ?>
          <tr>
            <td><?= $fila['posicion'] ?></td>
            <td><?= $fila['nombredelequipo'] ?></td>
            <td><?= $fila['puntos'] ?></td>
            <td>
              <a href="editarLigas.php?id=<?= $fila['id'] ?>" class="btn btn-sm btn-warning">Editar</a>
              <a href="eliminarLigas.php?id=<?= $fila['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('¿Eliminar este equipo?');">Eliminar</a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>

      <a href="agregarLigas.php" class="btn btn-outline-primary mt-3">Agregar nuevo equipo</a>
      <a href="main.html" class="btn btn-outline-dark mt-3">Volver al inicio</a>
    </div>
  </main>
</body>
</html>
