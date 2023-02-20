<?php include("includes/conexion.php"); ?>
<?php include("includes/menu.php"); ?>
<?php 
if($_POST){

$nombre=$_POST['nombre'];
$numero=$_POST['numero'];
$color=$_POST['color'];


$query = "INSERT INTO equipos(nombre, nro_jugadores, color_equipo) VALUES ('$nombre','$numero','$color')";
$result = mysqli_query($conn, $query);


}
?>
<?php include("includes/cabecera.php"); 
?>
<br><br>

<div class="row">
<form action="registro.php" method="post" class="row mb-3"><br/>
<div class="col-md-12">
  <label for="" class="form-label"></label>
</div>
<div class="col-md-12">
  <label for="" class="form-label">Nombre del equipo</label>
  <input type="text"  name="nombre" class="form-control" id="">
</div>
<div class="col-md-12">
  <label for="" class="form-label">Numero de jugadores</label>
  <input type="number" name="numero" class="form-control" id="">
</div>
<div class="col-12">
  <label for="" class="form-label">Color de equipo</label>
  <select id="inputState" name="color" class="form-select">
    <option selected></option>
    <option>blanco</option>
    <option>negro</option>
    <option>azul</option>
    <option>amarillo</option>
    <option>rojo</option>
  </select>
</div>
<br/>
<div class="col-12">
  <button type="submit" class="btn btn-primary">Reserva</button>
  <a class="btn btn-primary"  href="index.php">Muestra de reserva</a>
</div>
</form>


<?php include("includes/pie.php"); ?>
