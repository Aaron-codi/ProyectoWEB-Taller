<?php
    $conn = mysqli_connect("localhost", "root", "", "ligas_db");
    $nomEquipo= $_POST['equipo'];
    $posi=$_POST['posicion'];
    $pj=$_POST['partidos_jugados'];
    $pg=$_POST['partidos_ganados'];
    $emp=$_POST['empatados'];
    $perd=$_POST['perdidos'];
    mysqli_query($conn, "INSERT INTO datosliga (equipo, posicion, partidos_jugados, partidos_ganados,empatados, perdidos) VALUES ('$nomEquipo', '$posi', '$pj', '$pg', '$emp', '$perd')");
    header("location: Torneos.php");
?>