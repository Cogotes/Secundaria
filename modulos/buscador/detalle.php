<?php 
	require_once "config/bbdd1.php"; 
	$consulta = "select * from informacion where id ='".$_GET['id']."'";
	$query = mysql_query($consulta);
?>
<link text="text/css" rel="stylesheet" href="mas/js/default/style.css" />

<div id="body">

<?php if($row = mysql_fetch_array($query)):?>

<table width="790" height="25" border="0" cellpadding="1" cellspacing="1" id="borde">

<tr bgcolor="e9e9e9"> 

<td width="248" height="40" class="tit-verde"><align="left">Id Registro: </td>
<td width="248" height="40" class="tit-verde"><align="left">T&iacute;tulo: </td>
<td width="248" height="40" class="tit-verde"><align="left">Tipo: </td>
<td width="248" height="40" class="tit-verde"><align="left"> N&uacute;mero:</td>
<td width="248" height="40" class="tit-verde"><align="left"> P&uacute;blicado en:</td>
</tr>
<tr>
<td class="texto-comun">	<?php echo $row['id']; ?></td>
		<td class="texto-comun">    <?php echo $row['titulo']; ?></td> 
		<td class="texto-comun">	<?php echo $row['tipo'];?></td>
		<td class="texto-comun">	<?php echo $row['numero'];?></td>
		<td class="texto-comun">	<?php echo $row['publicada'];?></td>	
</tr>


<tr bgcolor="e9e9e9">
<td width="248" height="40" class="tit-verde"><align="left">Autor: </td>
<td width="248" height="40" class="tit-verde"><align="left">Fecha:</td>
<td width="248" height="40" class="tit-verde"><align="left">Resumen:</td>
<td width="248" height="40" class="tit-verde"><align="left">Descriptores:</td>
<td width="248" height="40" class="tit-verde"><align="left">Modifica A:</td>
</tr>
<tr>
<td class="texto-comun">	<?php echo $row['autor']; ?></td>
		<td class="texto-comun">	<?php echo $row['fecha']; ?></td>
		<td class="texto-comun">	<?php echo $row['resumen'] ;?>  </td>
		<td class="texto-comun">	<?php echo $row['coleccion'];?></td>
		<td class="texto-comun">	<?php echo $row['modifica'];?> </td>
		<td></td>	

</tr>
<tr bgcolor="e9e9e9">

<td width="248" height="40" class="tit-verde"><align="left">Modificada Por:</td>	
<td width="248" height="40" class="tit-verde"><align="left">Estado: </td>
<td width="248" height="40" class="tit-verde"><aling="center" width="249" height="89">  Geogr&aacute;fico:</td>
<td width="248" height="40" class="tit-verde"><align="left">Documento:</td>
<td></td>
</tr>

<tr>
			
		
		<td class="texto-comun">	<?php echo $row['modificada_por'];?> </td>
		<td class="texto-comun">	<?php echo $row['estado'];?> </td>
		<td class="texto-comun">	<?php echo $row['geografico'];?>  </td>
		<td class="texto-comun">	<a href="../repo/modulos/buscador/documentos/<?php echo $row['documento'];?>" id="link" target="_blank">ABRIR / DESCARGAR</a> </td>
		<td></td>
</tr>		
<?php endif; ?>
		
  </table>
</div>
</body>