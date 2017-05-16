<?php

//Configuracion de la conexion a base de datos
$conexion = mysqli_connect ("localhost","root","admin","servidores");

//consulta todos los empleados
$consulta = "SELECT * FROM accesos";
$ejecutar = mysqli_query($conexion,$consulta);

?>
<table style="color:#000099;width:400px;">
	<tr style="background:#9BB;">
		<td>Nombre</td>
		<td>Apellido</td>
		<td>Web</td>
	</tr>
<?php
  while($row = mysqli_fetch_array($ejecutar)){
  echo "<tr>";
  	echo "<td>".$row['nombre']."</td>";
  	echo "<td>".$row['apellido']."</td>";
  	echo "<td>".$row['web']."</td>";
  	echo "</tr>";
  }
?>
</table>
