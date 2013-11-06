<div id="body">
<?php
		//include("../Secundaria/modulos/login/comprobar.php");
		require_once "config/bbdd3.php";
	$consulta = "select * from datos_permu where LEGAJO ='".$_GET['LEGAJO']."'";
	
	$query = mysql_query($consulta);
	
	if($row = mysql_fetch_array($query)):
?>
<blockquote>
<center><h2>Carga de Datos Personales </h2></center>
</blockquote>
<blockquote>
	<?php echo $row['DNI']; ?>.<br> <?php echo $row['APELLIDO_NOMBRE']; ?>.<br> <?php echo $row['LEGAJO']; ?>
</blockquote>


<form action="index.php?mod=buscador&acc=actualizar_titular" method="post" name="formNoticia">

<blockquote>Lugares actuales donde me desempeño</blockquote>
	<table border="2" cellpadding="1" cellspacing="1" class="CSSTableGenerator">
	

	<tr>
	

	 <td><input type="hidden" name="DNI" value="<?php echo $row['DNI']; ?>"></td>

	<td><input type="hidden" name="APELLIDO_NOMBRE" value="<?php echo $row['APELLIDO_NOMBRE']; ?>"></td>

	<td><input type="hidden" name="LEGAJO" value="<?php echo $row['LEGAJO']; ?>"></td>
	<td></td>

	
	</tr>


	<tr>
	
	<td>Localidad:<input type="text" name="localidad1" value="<?php echo $row['localidad1']; ?>"></td>

	<td>Establecimiento:
<input type="text" name="establecimiento1" value="<?php echo $row['establecimiento1']; ?>">
</td>


	<td>Cargo/asignatura:<input type="text" name="cargo1" value="<?php echo $row['cargo1']; ?>"></td>
	<td>Turno <input type="text" name="turno1" value="<?php echo $row['turno1']; ?>"></td>

	<td>Horas:<input type="text" name="horas1" value="<?php echo $row['horas1']; ?>"></td>

	<input type="hidden" name="permisos" value="<?php echo $row['permisos']; ?>">
	<!-- <br><?php// echo $row['permisos']; ?> -->

<!-- campos 2 -->
<tr>
	
	<td> Otro:<input type="text" name="localidad2" value="<?php echo $row['localidad2']; ?>"></td>

	<td>Otro:
<input type="text" name="establecimiento2" value="<?php echo $row['establecimiento2']; ?>">
</td>


	<td>Otro:<input type="text" name="cargo2" value="<?php echo $row['cargo2']; ?>"></td>
	<td>Otro:<input type="text" name="turno2" value="<?php echo $row['turno2']; ?>"></td>
	<td>Otro:<input type="text" name="horas2" value="<?php echo $row['horas2']; ?>"></td>

	<!-- <td><input type="hidden" name="permisos" value="<?php// echo $row['permisos']; ?>"></td>  -->
	<!-- <br><?php// echo $row['permisos']; ?> -->


</tr>

<tr>

	
	
	<td>Otro:<input type="text" name="localidad3" value="<?php echo $row['localidad3']; ?>"></td>

	<td>Otro:<input type="text" name="establecimiento3" value="<?php echo $row['establecimiento3']; ?>"></td>


	<td>Otro:<input type="text" name="cargo3" value="<?php echo $row['cargo3']; ?>"></td>
	<td>Otro:<input type="text" name="turno3" value="<?php echo $row['turno3']; ?>"></td>

	<td>Otro:<input type="text" name="horas3" value="<?php echo $row['horas3']; ?>"></td>

	<!-- <td><input type="hidden" name="permisos" value="<?php// echo $row['permisos']; ?>"></td>  -->
	<!-- <br><?php// echo $row['permisos']; ?> -->

	</tr>

</table>
<br>
<blockquote> Lugar donde me interesa permutar</blockquote>

<table border="2" cellpadding="1" cellspacing="1" class="CSSTableGenerator">
	
	
	<td> Localidad: <input type="text" name="localidad4" value="<?php echo $row['localidad4']; ?>"></td>

	<td> Establecimiento:
<input type="text" name="establecimiento4" value="<?php echo $row['establecimiento4']; ?>">
</td>


	<!-- <td>Cargo:<input type="text" name="cargo3" value="<?php// echo $row['cargo4']; ?>"></td> -->
	<td>Turno <input type="text" name="turno4" value="<?php echo $row['turno4']; ?>"></td>

	<!-- <td>Horas:<input type="text" name="horas3" value="<?php// echo $row['horas4']; ?>"></td> -->

	<!-- <td><input type="hidden" name="permisos" value="<?php// echo $row['permisos']; ?>"></td>  -->
	<!-- <br><?php// echo $row['permisos']; ?> -->

	</tr>


	<tr>
	<td colspan="3" align="right">
	<!-- <input type="hidden" name="LEGAJO" value="<?php// echo $row['LEGAJO']; ?>"> -->
	<input type="button" value="Grabar" onclick="enviar('formNoticia')">
	<input type="button" value="Volver" onclick="history.back()">
	<input type="reset" value="Limpiar">
	</td>
	<td></td>
	</tr>
	</table>
	</form>
</div>
<?php endif; ?>