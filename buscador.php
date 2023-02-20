<?php

include("includes/conexion.php");

?>


<!DOCTYPE html>
<html>
<head>
    <title>hotel</title>
</head>
<body>

<?php include("includes/menu.php"); ?>

<br/><br/>
<div class="clearfix"> </div><br/>
<table class="table table-bordered table-hover">
        <thead>
           <tr>
                <th scope="col">ID</th> 
                <th scope="col">Nombre</th> 
                <th scope="col">Nro de jugadores</th> 
                <th scope="col">Color de Equipo</th>  

            </tr>
        </thead>  
    <tbody>
<?php

 $busqueda = $_POST['search'];
 $query = "SELECT * FROM equipos WHERE nombre LIKE '%$busqueda%'";
 $result = mysqli_query($conn, $query);
 while($row = mysqli_fetch_array($result)): ?>
        <tr>
            <th><?php echo $id=$row["id"]; ?></th>
            <th><?php echo $nombre=$row["nombre"]; ?></th>
            <th><?php echo $numero=$row["nro_jugadores"]; ?></th>
            <th><?php echo $color=$row["color_equipo"]; ?></th>
            
            <th><a class="eliminar btn btn-danger" href="eliminar.php?id=<?php echo $row['id'];?>">Eliminar</th> 
            <?php endwhile; ?>
        </tbody>
    </table>
</body>
</html>

