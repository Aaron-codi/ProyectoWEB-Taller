<?php
    $conn = mysqli_connect("localhost", "root", "", "alumnos_db");
    $id = $_GET['id'];
    mysqli_query($conn, "DELETE FROM alumnos WHERE id=$id");
    header("location: index.php");
?>