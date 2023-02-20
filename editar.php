<?php include("includes/cabecera.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$id = $_GET['id'];
$nombre=$_GET['nombre'];
$numero=$_GET['nro_jugadores'];
$color=$_GET['color_equipo'];


?>
<br/>
<div class="container">
    <div class="row justify-content-center align-items-center g-2">
        <div class="col"></div>
        <div class="col">

        <div class="card">
    <div class="card-header">
        Ingresar Datos
    </div>
    <div class="card-body">
        
<form action="sp_editar.php" method="POST">

    <input type="text" name="id" id="" style="visibility:hidden" value="<?=$id?>">
                    <br/>
                    NOMBRE:
                    <input type="text" name="nombre" id="" value="<?=$nombre?>">
                    <br/>
                    NUMERO DE JUGADORES:
                    <input type="number" name="nro_jugadores" id="" value="<?=$numero?>">
                    <br/>
                    COLOR EQUIPO:
                   <select id="inputState" name="color_equipo" class="form-select" id="" value="<?=$color?>">
                   <option selected></option>
                   <option>blanco</option>
                   <option>negro</option>
                   <option>azul</option>
                   <option>amarillo</option>
                   <option>rojo</option>
                   </select>
                    <br/>
                    <input class="btn btn-primary" type="submit" value="Actualizar">
                    <a class="btn btn-danger" href="index.php" >Cancelar</a>
                    
               
        </form>

    </div>
    <div class="card-footer text-muted">
        
    </div>
</div>

        </div>
        <div class="col"></div>
    </div>
</div>
<?php include("includes/pie.php"); ?>
</body>
</html>
