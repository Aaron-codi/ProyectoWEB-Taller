<?php
$conn = mysqli_connect("localhost", "root", "", "ligas_db");

$posicion = $_POST['posicion'];
$nombre = $_POST['nombredelequipo'];
$puntos = $_POST['puntos'];

$sql = "INSERT INTO datosliga (posicion, nombredelequipo, puntos) 
        VALUES ('$posicion', '$nombre', '$puntos')";
mysqli_query($conn, $sql);

header("Location: torneos.php");
?>
