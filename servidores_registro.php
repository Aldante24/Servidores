<html>
  <head>
  <title>Registro de empleados</title>
  <script language="JavaScript" type="text/javascript" src="ajax.js"></script>
  </head>
  <body>
		<form name="nuevo_servidor" action="" onsubmit="enviarDatosServidor(); return false">
			<h2>Nuevo Servidor</h2>
				<table>
                <tr>
                	<input id="sis_opera" name="sis_opera" type="text" placeholder="Sistema Operativo" /><br>
               	</tr>
                <tr>
					        <input id="nombre" name="nombre" type="text" placeholder="Nombre" /><br>
                </tr>
                <tr>
                  <input id="ip" name="ip" type="text" placeholder="Direccion IP" /><br>
                </tr>
                <tr>
                  <input id="user" name="user" type="text" placeholder="Usuario" /><br>
                </tr>
                <tr>
                  <input id="pass" name="pass" type="text" placeholder="Password" /><br>
                </tr>
                <tr>
                  <input id="con_rem" name="con_rem" type="text" placeholder="Tipo de Acceso Remoto" /><br>
                </tr>
                <tr>
                  <input id="vnc" name="vnc" type="text" placeholder="Pass VNC" /><br>
                </tr>
                <tr>
                  <textarea id="desc" name="desc" rows="8" cols="80"placeholder="Descripcion"></textarea><br>
                </tr>
                   	<td>&nbsp;</td><td><label><input type="submit" name="Submit" value="Guardar" /></label></td>
                </tr>
                </table>
		</form>

		<div id="resultado"><?php include('consulta.php');?></div>

    </body>
</html>
