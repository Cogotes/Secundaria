<div id="body">

<?php 
	require_once "config/bbdd3.php"; 
	$consulta = "select * from DATOS where LEGAJO ='".$_GET['LEGAJO']."'";
	$query = mysql_query($consulta);
?>

<?php if($row = mysql_fetch_array($query)):?>


<table width="790" height="25" border="0" cellpadding="1" cellspacing="1" id="borde">

<tr bgcolor="e9e9e9"> 

<!-- <td width="248" height="40" class="tit-verde"><align="left">id: </td> -->
<!-- <td width="248" height="40" class="tit-verde"><align="left">DNI</td> -->
<td>APELLIDO Y NOMBRE </td>
<td> N&uacute;mero: de Legajo</td>
<td></td>
<td></td>
<td></td>
<!-- <td width="248" height="40" class="tit-verde"><align="left"> P&uacute;blicado en:</td> -->
</tr>

<tr>
<!-- <td class="texto-comun">	<?php// echo $row['id']; ?></td> -->
		<!-- <td class="texto-comun">    <?php// echo $row['DNI']; ?></td>  -->
		<td class="texto-comun">	<?php echo $row['APELLIDO_NOMBRE'];?></td>
		<td class="texto-comun">	<?php echo $row['LEGAJO'];?></td>
		<!-- <td class="texto-comun">	<?php// echo $row['publicada'];?></td>	 -->

<td></td>
<td></td>
<td></td>

</tr>



<tr>
<td>loacalidad actual</td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr bgcolor="e9e9e9">

<td width="248" height="40" class="tit-verde"><align="left">Localidad: </td>
<td width="248" height="40" class="tit-verde"><align="left">Establecimiento:</td>
<td width="248" height="40" class="tit-verde"><align="left">Cargo:</td>
<td width="248" height="40" class="tit-verde"><align="left">Horas:</td>
<td></td>

<!--<td width="248" height="40" class="tit-verde"><align="left">Modifica A:</td> -->
</tr>



<tr>
<td class="texto-comun">	<?php echo $row['localidad1']; ?></td>
		<td class="texto-comun">	<?php echo $row['establecimiento1']; ?></td>
		<td class="texto-comun">	<?php echo $row['cargo1'] ;?>  </td>
		<td class="texto-comun">	<?php echo $row['horas1'];?></td>
		<!-- <td class="texto-comun">	<?php// echo $row['modifica'];?> </td> -->
		<td></td>	

</tr>


<!-- 2  -->

<tr>
<td>loacalidad Destino</td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr bgcolor="e9e9e9">

<td width="248" height="40" class="tit-verde"><align="left">Localidad : </td>
<td width="248" height="40" class="tit-verde"><align="left">Establecimiento:</td>
<td width="248" height="40" class="tit-verde"><align="left">Cargo:</td>
<td width="248" height="40" class="tit-verde"><align="left">Horas:</td>
<!--<td width="248" height="40" class="tit-verde"><align="left">Modifica A:</td> -->
</tr>



<tr>
<td class="texto-comun">	<?php echo $row['localidad2']; ?></td>
		<td class="texto-comun">	<?php echo $row['establecimiento2']; ?></td>
		<td class="texto-comun">	<?php echo $row['cargo2'] ;?>  </td>
		<td class="texto-comun">	<?php echo $row['horas2'];?></td>
		<!-- <td class="texto-comun">	<?php// echo $row['modifica'];?> </td> -->
		<td></td>	

</tr>


<!-- 2 -->



<!-- 3 -->

<tr>
<td>loacalidad Otra</td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr bgcolor="e9e9e9">

<td width="248" height="40" class="tit-verde"><align="left">Localidad 3: </td>
<td width="248" height="40" class="tit-verde"><align="left">Establecimiento 3:</td>
<td width="248" height="40" class="tit-verde"><align="left">Cargo 3:</td>
<td width="248" height="40" class="tit-verde"><align="left">Horas 3:</td>
<!--<td width="248" height="40" class="tit-verde"><align="left">Modifica A:</td> -->
</tr>



<tr>
<td class="texto-comun">	<?php echo $row['localidad3']; ?></td>
		<td class="texto-comun">	<?php echo $row['establecimiento3']; ?></td>
		<td class="texto-comun">	<?php echo $row['cargo3'] ;?>  </td>
		<td class="texto-comun">	<?php echo $row['horas3'];?></td>
		<!-- <td class="texto-comun">	<?php// echo $row['modifica'];?> </td> -->
		<td></td>	

</tr>
<!-- 3 -->


<tr bgcolor="e9e9e9">
<!-- 
<td width="248" height="40" class="tit-verde"><align="left">Modificada Por:</td>	
<td width="248" height="40" class="tit-verde"><align="left">Estado: </td>
<td width="248" height="40" class="tit-verde"><aling="center" width="249" height="89">  Geogr&aacute;fico:</td>
<td width="248" height="40" class="tit-verde"><align="left">Documento:</td>
<td></td>
</tr>
 -->
<tr>
			
		
		<!-- <td class="texto-comun">	<?php// echo $row['modificada_por'];?> </td>
		<td class="texto-comun">	<?php// echo $row['estado'];?> </td>
		<td class="texto-comun">	<?php// echo $row['geografico'];?>  </td>
		 -->
		<td class="texto-comun">	
 <a href="index.php?mod=buscador&acc=modificar_titular&LEGAJO=<?php echo $row_Rs['LEGAJO']; ?>" id="link">Actulizar Perfil</a> 
<!-- <a href="index.php?mod=login&acc=loguear_titular" id="link">Actulizar y/o agregar Datos de Cargos</a> -->

<!-- <a href="../repo/modulos/buscador/documentos/<?php// echo $row['documento'];?>" id="link" target="_blank">ABRIR / DESCARGAR</a>  --></td>
		<td></td>
</tr>		
<?php endif; ?>
		
  </table>
</div>
</body>