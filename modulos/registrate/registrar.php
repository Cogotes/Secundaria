
<div id="body">
<a href="index.php?mod=registrate&acc=loguear">si ya estas registrado/a ingresa aquii</a>

	<center> <h1> <div id="link" > Registrarse 	</div>	</h1></center>

	<form action="index.php?mod=registrate&acc=grabaregis" method="post" name="formNoticia">

	<table width="837" height="234" align="center">

	<td bgcolor="#FF6600">Usuario:   

	<input type="text" name="user">

	</td>

	<td bgcolor="#FF6600">Contrase&ntilde;a: 

    <input type="text" name="pass">

	</td>
	

	<td bgcolor="#FF6600">Apellido: 

	<input type="text" name="apellido">

	</td>

	</tr>

	<td bgcolor="#FF6600">Nombre: 

	<input type="text" name="nombre">

	</td>

<td bgcolor="#FF6600">DNI: 

	<input type="text" name="dni">

	</td>

	<td bgcolor="#FF6600">

	Mail:

	<input type="text" name="mail">

	</td>
	
	<tr>
	<td colspan="3" align="right" bgcolor="#FF6600">
	<input type="button" value="Grabar" onclick="enviar('formNoticia')">
	<input type="button" value="Volver" onclick="history.back()">
	<input type="reset" value="Limpiar">
	</td>
	</tr>
	</table>
    </form>
	</div>
