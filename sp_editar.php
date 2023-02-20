<?php
include("includes/conexion.php");
$id = $_POST['id'];
$nombre=$_POST['nombre'];
$numero=$_POST['nro_jugadores'];
$color=$_POST['color_equipo'];


 
 $sql = "UPDATE equipos set nombre='$nombre', 
 nro_jugadores='$numero', color_equipo='$color' where id='$id'";
 $rta = mysqli_query($conn, $sql); 
 if (!$rta) {
    echo "No se Actualizo!";
 }
 else {
    header("Location: index.php");
 }
?>