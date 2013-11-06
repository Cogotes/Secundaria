<?php 
	require_once "config/bbdd1.php"; 
	$consulta = "select * from datos_secu where id ='".$_GET['id']."'";
	$query = mysql_query($consulta);
?>
<link text="text/css" rel="stylesheet" href="mas/js/default/style.css" />
<div id="body">

<?php if($row = mysql_fetch_array($query)):?>
<table width="790" height="25" border="0" cellpadding="1" cellspacing="1" id="table">


<tr>
<td class="tit-verde">Id:</td> 
<td class="tit-verde">escuela:</td>
</tr>
<tr>
<td class="texto-chico"><?php echo $row['id']; ?></td>
<td class="texto-chico"><?php echo $row['escuela']; ?></td>
</tr>

<br>
<tr>
<td class="tit-verde">numero: </td> 
<td class="tit-verde"> localidad:</td> 
</tr>

<tr>
<td class="texto-chico"><?php echo $row['numero'];?></td>
<td class="texto-chico"><?php echo $row['localidad'];?></td>
</tr>

<br>
<tr>
<td class="tit-verde">fecha: </td>
<td class="tit-verde">Competencia: </td>
</tr>
<tr>
<td class="texto-chico"><?php echo $row['fecha'];?></td>
<td class="texto-chico"><?php echo $row['competencia'];?></td>
</tr>
<br>
<tr>
<td class="tit-verde"> Residencia:</td> 
<td class="tit-verde">Documento: </td>
</tr>

<tr>
<td class="texto-chico"><?php echo $row['residencia'];?></td>
<td class="texto-chico"><?php echo $row['documento'];?></td>
</tr>


<br>


<tr>


<td class="texto-chico"><a href="index.php?mod=buscador&acc=eliminar&id=<?php echo $row['id']; ?>" ><img src="mas/img/eliminar.png" width="30">eliminar</a>
<td class="texto-chico"><a href="index.php?mod=inicio&acc=modificar&id=<?php echo $row['id']; ?>" ><img src="mas/img/editar.png" width="30">editar</a>
</tr>


		
<?php endif; ?>
		
  </table>
</div>
