<?php 
	include("../secundaria/modulos/login/comprobar.php");
	require_once "config/bbdd3.php"; 
	/*
	* Consulta para contar registros
	*/
	$consulta = "select count(*) as cuantos from datos_secu where numero like '%".$_GET['q']."%' ";
	/*
	* query de la consulta anterior 
	*/
	$query = mysql_query($consulta);	
	/*
	* total de registros
	*/
	if($row = mysql_fetch_array($query)):
	$total=$row["cuantos"];
	endif;	
	/*
	* Para el paginado 
	*/
	$resto = $total % 10;
	$ultimo = $total - $resto;
	//
	if(isset($_GET['pos'])):
	$inicio=$_GET['pos'];
	else:
	$inicio=0;
	endif;
	/*
	* Consulta para la busqueda 
	*/
	$consulta2 = "select * from datos_secu
					where 
					numero like '%".$_GET['q']."%' ";
	$query2 = mysql_query($consulta2);
?>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<link text="text/css" rel="stylesheet" href="mas/js/default/style.css" />
	<div id="body">
	<pre id="link"><h3>Editar Registros </h3></pre><hr />
	<br />
	<table width="713"  border="1" align="center" >
	
	
	<tr  bgcolor="#BBDDDD">
	<td width="178" align="center">escuela</td>		
	<!--<td width="178" align="center">Tipo</td>		-->
	<td width="104" align="center">N&uacute;mero</td>
	<!--<td width="178" align="center">P&uacute;blicado en</td>		
	<!--<td width="77" align="center">Autor</td>-->		
	
	<!--<td width="77" align="center">Fecha</td>-->		
	
	<td width="126" align="center">localidad</td>
	<td></td>
	<td></td>
		
	<!--<td width="80" align="center">Descriptor</td>		-->
	<!--<td width="178" align="center">Modifica a </td>		
	<td width="178" align="center">Modificada por</td>		
<td width="119" align="center">Estado</td>
-->	
<!--<td width="118" align="center">documento</td>-->
	

	</tr>
				
<?php 
	if(mysql_num_rows($query2) == 0): //cuando marca error en linea 80 por q la consulta a la tabla tiene un error
	echo "<tr>
	<td colspan='2'>
	No se encontro nada				
	</td>	
	</tr>
		";
	else:
	$impreso=0;		
		 
	while($row2=mysql_fetch_array($query2)):
	$impreso++; 
?>			
	<tr>

	
	<td> <?php echo htmlentities(substr($row2['escuela'],0,250),null,"UTF-8"); ?></td>
	<!--<td> <?php// echo htmlentities(substr($row2['tipo'],0,250),null,"UTF-8"); ?></td>	-->
	<td> <?php echo htmlentities(substr ($row2['numero'],0,250),null,"UTF-8"); ?></td>	
	<!--<td> <?php// echo htmlentities(substr($row2['publicada'],0,250),null,"UTF-8"); ?></td>-->
	<!--<td> <?php// echo htmlentities(substr($row2['autor'],0,250),null,"UTF-8"); ?> 
	
	</td>-->		
	<!--<td> <?php// echo htmlentities (substr($row2['fecha'],0,250),null,"UTF-8"); ?> 
	</td>		-->
	<td> <?php echo htmlentities (substr($row2['localidad'],0,250),null,"UTF-8"); ?>
	</td>		
	<!--<td> <?php// echo htmlentities(substr ($row2['coleccion'],0,250),null,"UTF-8"); ?> 
	</td>
	--><!--<td> <?php// echo htmlentities(substr($row2['modifica'],0,250),null,"UTF-8"); ?></td>
	<td> <?php// echo htmlentities(substr($row2['modificada_por'],0,250),null,"UTF-8"); ?></td>
	
	<td> <?php// echo htmlentities(substr ($row2['estado'],0,250),null,"UTF-8"); ?> -->
	</td>	
	<!--<td> <?php// echo htmlentities(substr ($row2['documento'],0,250),null,"UTF-8"); ?> -->
	</td>

	<td width="48"><a href="index.php?mod=buscador&acc=modificar&id=<?php echo $row2['id']; ?>" ><img src="mas/img/editar.png" width="30"></a></td>
	<td width="54"><a href="index.php?mod=buscador&acc=eliminarSIoNO&id=<?php echo $row2['id']; ?>" ><img src="mas/img/eliminar.png" width="30"></a></td>
	
<?php endwhile; endif;?>
	<tr>
	<td> 	<a href="index.php?mod=inicio&acc=inicio" div id="link">Volver</a> 
	</td>
	</tr>
	</table>		
	<hr>
	</div>
