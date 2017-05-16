<?php

//Configuracion de la conexion a base de datos
$conexion = mysqli_connect ("localhost","root","admin","ajax");


//variables POST
  $nom=$_POST['nombre'];
  $ape=$_POST['apellido'];
  $web=$_POST['web'];

//registra los datos del empleados
  $insertar="INSERT INTO empleados (nombre, apellido, web) VALUES ('$nom', '$ape', '$web')";
  $ejecutar = mysqli_query($conexion,$insertar);

include('consulta.php');
?>
