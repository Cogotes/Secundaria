<div id="body">
<?php
		//include("../Secundaria/modulos/login/comprobar.php");
		require_once "config/bbdd3.php";
	$consulta = "select * from DATOS where LEGAJO ='".$_GET['LEGAJO']."'";
	
	$query = mysql_query($consulta);
	
	if($row = mysql_fetch_array($query)):
?>

<center><h1>Editar Perfil</h1></center>


	<?php echo $row['DNI']; ?><br>


	<?php echo $row['APELLIDO_NOMBRE']; ?><br>


	<?php echo $row['LEGAJO']; ?><br>

<form action="index.php?mod=buscador&acc=actualizar_titular" method="post" name="formNoticia">


	<table align="center">
	

	<tr>
	

	 <td>LOCALIDAD: <input type="text" name="DNI" value="<?php echo $row['DNI']; ?>"></td>

	<td>LOCALIDAD: <input type="text" name="APELLIDO_NOMBRE" value="<?php echo $row['APELLIDO_NOMBRE']; ?>"></td>

	<td>LOCALIDAD: <input type="text" name="LEGAJO" value="<?php echo $row['LEGAJO']; ?>"></td>

	<td>LOCALIDAD: <input type="text" name="localidad1" value="<?php echo $row['localidad1']; ?>"></td>

	<tr>
	
	<td>ESTABLECIMIENTO:
<input type="text" name="establecimiento1" value="<?php echo $row['establecimiento1']; ?>">
</td>


	<td>CARGO:<input type="text" name="cargo1" value="<?php echo $row['cargo1']; ?>"></td>

	<td>HORAS:<input type="text" name="horas1" value="<?php echo $row['horas1']; ?>"></td>

	<td>permisos: <input type="text" name="permisos" value="<?php echo $row['permisos']; ?>"></td> 
	<!-- <br><?php// echo $row['permisos']; ?> -->

	</tr>
	<tr>
	<td colspan="3" align="right">
	<!-- <input type="hidden" name="LEGAJO" value="<?php// echo $row['LEGAJO']; ?>"> -->
	<input type="button" value="Grabar" onclick="enviar('formNoticia')">
	<input type="button" value="Volver" onclick="history.back()">
	<input type="reset" value="Limpiar">
	</td>
	</tr>
	</table>
	</form>
</div>
<?php endif; ?>