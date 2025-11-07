<?php
$conn = mysqli_connect("localhost", "root", "", "ligas_db");

$id = $_POST['id'];
$posicion = $_POST['posicion'];
$nombre = $_POST['nombredelequipo'];
$puntos = $_POST['puntos'];

$sql = "UPDATE datosliga 
        SET posicion='$posicion', nombredelequipo='$nombre', puntos='$puntos'
        WHERE id=$id";
mysqli_query($conn, $sql);

header("Location: torneos.php");
?>
