<?php 

include("includes/conexion.php");

if(isset($_GET['id'])){

    $id = $_GET['id'];
    $query = "DELETE FROM equipos WHERE id = $id";
    $result = mysqli_query($conn,$query);
    header("Location:index.php");
}

?>