<div id="body">

<?php 
	require_once "config/bbdd4.php"; 
	$consulta = "select * from datos_permu where LEGAJO ='".$_GET['LEGAJO']."'";
	$query = mysql_query($consulta);
?>

<?php if($row = mysql_fetch_array($query)):?>


<table border="2" cellpadding="1" cellspacing="1" class="CSSTableGenerator">


<!-- <td width="248" height="40" class="tit-verde"><align="left">id: </td> -->
<!-- <td width="248" height="40" class="tit-verde"><align="left">DNI</td> -->

<!-- <td width="248" height="40" class="tit-verde"><align="left"> P&uacute;blicado en:</td> -->

<!-- <td class="texto-comun">	<?php// echo $row['id']; ?></td> -->
		<!-- <td class="texto-comun">    <?php// echo $row['DNI']; ?></td>  -->
<blockquote>			<?php echo $row['APELLIDO_NOMBRE'];?> </blockquote>
		<!-- <td class="texto-comun">	<?php// echo $row['LEGAJO'];?></td> -->
		<!-- <td class="texto-comun">	<?php// echo $row['publicada'];?></td>	 -->






<blockquote>loacalidad Donde me desempeño actualmente</blockquote>
<tr>
<td>Localidad</td>
<td>Establecimiento</td>
<td>Cargo/asignatura</td>
<td>Turno</td>
<td>Horas</td>
</tr>

<tr>
		<td>	<?php echo $row['localidad1']; ?></td>
		<td>	<?php echo $row['establecimiento1']; ?></td>
		<td>	<?php echo $row['cargo1'] ;?>  </td>
		<td>	<?php echo $row['turno1'] ;?>  </td>
		<td>	<?php echo $row['horas1'];?></td>
		<!-- <td class="texto-comun">	<?php// echo $row['modifica'];?> </td> -->


</tr>


<!-- 2  -->

<?php echo $row['localidad4']; ?>
<tr>

<td><?php echo $row['localidad2']; ?></td>
<td><?php echo $row['establecimiento2']; ?></td>
<td><?php echo $row['cargo2'] ;?></td>
<td><?php echo $row['turno2'] ;?>  </td>
<td><?php echo $row['horas2'];?></td>
<!--<td width="248" height="40" class="tit-verde"><align="left">Modifica A:</td> -->
</tr>



<tr>
		<td>	<?php echo $row['localidad3']; ?></td>
		<td>	<?php echo $row['establecimiento3']; ?></td>
		<td>	<?php echo $row['cargo3'] ;?>  </td>
		<td>	<?php echo $row['turno3'] ;?>  </td>
		<td>	<?php echo $row['horas3'];?></td>

		<!-- <td class="texto-comun">	<?php// echo $row['modifica'];?> </td> -->

</tr>


<!-- 2 -->



<!-- 3 -->




</table>

<table border="2" cellpadding="1" cellspacing="1" class="CSSTableGenerator">

	<blockquote>Localidad donde me interesa permutar</blockquote>
<tr>

<td>Localidad: </td>
<td>Establecimiento:</td>
<td>Turno:</td>
<!-- <td>Horas:</td> -->
<!--<td width="248" height="40" class="tit-verde"><align="left">Modifica A:</td> -->
</tr>



<tr>
		<td>	<?php echo $row['localidad4']; ?></td>
		<td>	<?php echo $row['establecimiento4']; ?></td>
		<!-- <td>	<?php// echo $row['cargo4'] ;?>  </td> -->
		<td>	<?php echo $row['turno4'] ;?>  </td>
		<!-- <td>	<?php// echo $row['horas4'];?></td> -->
		<!-- <td class="texto-comun">	<?php// echo $row['modifica'];?> </td> -->
		<td></td>	

</tr>
<!-- 3 -->


	
<!-- 
<td width="248" height="40" class="tit-verde"><align="left">Modificada Por:</td>	
<td width="248" height="40" class="tit-verde"><align="left">Estado: </td>
<td width="248" height="40" class="tit-verde"><aling="center" width="249" height="89">  Geogr&aacute;fico:</td>
<td width="248" height="40" class="tit-verde"><align="left">Documento:</td>
<td></td>
</tr>
 -->

			

		<!-- <td class="texto-comun">	<?php// echo $row['modificada_por'];?> </td>
		<td class="texto-comun">	<?php// echo $row['estado'];?> </td>
		<td class="texto-comun">	<?php// echo $row['geografico'];?>  </td>
		 -->
		<!-- <td class="texto-comun">	 -->
 <!-- <a href="index.php?mod=buscador&acc=modificar_titular&LEGAJO=<?php// echo $row_Rs['LEGAJO']; ?>" id="link">Actulizar Perfil</a>  -->
<!-- <a href="index.php?mod=login&acc=loguear_titular" id="link">Actulizar y/o agregar Datos de Cargos</a> -->

<!-- <a href="../repo/modulos/buscador/documentos/<?php// echo $row['documento'];?>" id="link" target="_blank">ABRIR / DESCARGAR</a>  -->

		
  </table>
<hr>

<table>
		<fieldset>
<!--  -->
<form method="post" action="index.php?mod=buscador&acc=enviar_mail">
<table align="center" class="CSSTableGenerator">
	<blockquote>Solicitar Esta Permuta a junta Secundaria</blockquote>
	<tr>
		<td></td>
<td> <input type="hidden" name="usuario" value="<?php echo ($row['LEGAJO']); ?>"/></td>
</tr>

<tr>


<td>Nombre/s Apellido/s</td>
<td><input name="nombre"></td>
</tr>
<tr>
<td>E-mail</td>
<td><input name="email"></td>
</tr>
<tr>
<td>Comentario</td>
<td><textarea rows="8"cols="50" name="comentario"></textarea></td>
</tr>
<tr>
<td colspan="2"><input type="submit" value="Enviar"></td>
</tr>
</table>
</form>
</fieldset>


</div>




<?php endif; ?>
</body>