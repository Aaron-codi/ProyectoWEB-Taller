<?php
$conn= mysqli_connect("localhost","root", "", "alumnos_db");
$resultado= mysqli_query($conn, "SELECT*  FROM alumnos");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Torneos</h1>
    <table id="clasificacion-table">
        <thead>
            <th>Posicion</th>
            <th>Equipo</th>
            <th>partidos jugados</th>
            <th>Partidos ganados</th>
            <th>Empatados</th>
            <th>Perdidos</th>
            <th>Puntos totales</th>
        </thead>
        <tbody>
            <tr>
        
                <?php $array=mysqli_fetch_assoc($resultado); ?>
                <?php for($i=0;$i<$array;$i++)  ?>
                <td>>?= $fila ?></td> 
                <td></td>
                <td></td>
            </tr>
        </tbody>
        
    </table>
    <a class="btn btn-outline-dark mx-3" href="agregarLigas.php" role="button">Agregar equipos</a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" 
    crossorigin="anonymous"></script>
</body>
</html>