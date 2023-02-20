<?php

$conn=mysqli_connect(

'localhost',
'root',
'',
'futbol'

);

if(mysqli_connect_error()){

    echo "Error en la Base de Datos, Problemas en la conexion: " .mysqli_connect_error();

    exit();
}
else{

    /*echo "Conexion Exitosa!";**/
}


?>
