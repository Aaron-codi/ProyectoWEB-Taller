<?php
$conn = mysqli_connect("localhost", "root", "", "ligas_db");
$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM datosliga WHERE id=$id");
header("Location: torneos.php");
?>
