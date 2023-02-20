<?php include("includes/cabecera.php"); ?>
<?php include("includes/conexion.php"); ?>

<body>
<?php include("includes/menu.php"); ?>
    
<div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
    <img src="Img/fucho.jpg" class="d-block w-100" width="800" height="400" alt="banner 1" >
    </div>
    <div class="carousel-item">
    <img src="Img/Football_in_Bloomington,_Indiana,_1996.jpg" class="d-block w-100" width="800" height="400" alt="banner 2" >
    </div>


  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div class="container-fluid"id="">
<div class="container text-center">    
  <h1> Bienvenido a nuestro sitio web</h1>
  <br>
  <div class="row">
  <div class="hov">
  <div class="container text-center">    
  <h3> Realice su registro de equipo al a participar al torneo </h3>
  <br>
</div>

<div class="clearfix"> </div><br/><br/><br/>
    <a class="btn btn-primary"  href="registro.php">Registro de Equipo</a>
    
    <form action="buscador.php" method="post">
        <label for="campo">Buscar: </label>
        <input type="text" name="search" id="search">
        <input type="submit" name="enviar" value="Buscar">
    </form>
   
    <div class="clearfix"> </div>
    <br>
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th> 
                <th scope="col">Nombre</th> 
                <th scope="col">Nro de jugadores</th> 
                <th scope="col">Color del equipo</th>  
                <th scope="col">Acciones</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>  
    <tbody>

    <?php 
    $query = "SELECT * FROM equipos";
    $result = mysqli_query($conn,$query);
    while($row = mysqli_fetch_array($result)): ?>
        <tr>
            <th><?php echo $id=$row["id"]; ?></th>
            <th><?php echo $nombre=$row["nombre"]; ?></th>
            <th><?php echo $numero=$row["nro_jugadores"]; ?></th>
            <th><?php echo $color=$row["color_equipo"]; ?></th>
            <th>
            <a href="editar.php? 
                    id=<?php echo $row['id'];?>  &
                    nombre=<?php echo $row['nombre'];?> &
                    nro_jugadores=<?php echo $row['nro_jugadores'];?> &
                    color_equipo=<?php echo $row['color_equipo'];?> 
                    " class="btn btn-primary">Editar</a>
            </th>
            <th><a class="eliminar btn btn-danger" href="eliminar.php?id=<?php echo $row['id'];?>">Eliminar</th> 
        <?php endwhile; ?>
       </tbody>
    </table>
    <br><br>
    <br><br>

<?php include("includes/pie.php"); ?>



