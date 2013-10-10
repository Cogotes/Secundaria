<?php 
	require_once "config/bbdd2.php"; 
	
	/*
	* Consulta para contar registros
	*/
	$consulta = "select count(*) as cuantos from informacion
					where 
					titulo like '%".$_GET['q']."%' OR
					tipo like '%".$_GET['q']."%' OR
					numero like '%".$_GET['q']."%' OR
					publicada like '%".$_GET['q']."%' OR
					autor like '%".$_GET['q']."%' OR
					resumen like '%".$_GET['q']."%' OR
					coleccion like '%".$_GET['q']."%' OR
					modifica like '%".$_GET['q']."%' OR
					modificada_por like '%".$_GET['q']."%' OR
					estado like '%".$_GET['q']."%' OR
					geografico like '%".$_GET['q']."%' OR
					documento like'%".$_GET['q']."%' 
					";
	
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
	
	
	$resto = $total % 10;
	$ultimo = $total - $resto;
	
	if(isset($_GET['pos'])):
		$inicio=$_GET['pos'];
	else:
		$inicio=0;
	endif;
	
	
	* Consulta para la busqueda 
	*/
	$consulta2 = "select * from informacion 
					where 
					titulo like '%".$_GET['q']."%' OR
					tipo like '%".$_GET['q']."%' OR
					numero like '%".$_GET['q']."%' OR
					publicada like '%".$_GET['q']."%' OR
					autor like '%".$_GET['q']."%' OR
					resumen like '%".$_GET['q']."%' OR
					coleccion like '%".$_GET['q']."%' OR
					modifica like '%".$_GET['q']."%' OR
					modificada_por like '%".$_GET['q']."%' OR
					estado like '%".$_GET['q']."%' OR
					geografico like '%".$_GET['q']."%' OR
					documento like'%".$_GET['q']."%' 
					";
	
	$query2 = mysql_query($consulta2);
	
?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<link text="text/css" rel="stylesheet" href="mas/js/default/style.css" />
<div id="body"><br />
	
	<table width="903"  border="1" align="center">
			
			<tr height="50">
			
			<td >
			<h4>Resultado de la busqueda</h4>
			</td>
			
			</tr>
			
			<tr>
				
				<td width="247" align="center" bgcolor="#B19CFA">Título</td>		
				
				<td width="90" align="center" bgcolor="#B19CFA">Tipo </td>
				
				<td width="90" align="center" bgcolor="#B19CFA">N&uacute;mero </td>
				
				<!--<td width="134" align="center" bgcolor="#B19CFA"> Autor</td>-->
				
				<!--<td width="102" align="center" bgcolor="#B19CFA">Fecha </td>-->
			
				<td width="208" align="center" bgcolor="#B19CFA">Resumen  </td>
				
				<!--<td width="82" align="center" bgcolor="#B19CFA">Descriptor</td>-->	
				
				<!--<td width="90" align="center" bgcolor="#B19CFA">Estado </td>-->
				
				<!--<td width="90" align="center" bgcolor="#B19CFA">Documento</td>	-->
				
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
				<td> <?php echo htmlentities(substr($row2['titulo'],0,250),null,"UTF-8"); ?> </td>		
				
				<td> <?php echo htmlentities(substr($row2['tipo'],0,250),null,"UTF-8"); ?> </td>

				<td> <?php echo htmlentities(substr($row2['numero'],0,250),null,"UTF-8"); ?> </td>
				
				<!--<td> <?php// echo htmlentities(substr($row2['publicada'],0,250),null,"UTF-8"); ?> </td>
				
				<!--<td> <?php// echo htmlentities(substr($row2['autor'],0,250),null,"UTF-8"); ?> </td>	-->
					
				<!--<td align="center"> <?php// echo $row2['fecha']; ?> </td>-->
				
				<td><p> <?php echo htmlentities(substr($row2['resumen'],0,250),null,"UTF-8"); ?></p> </td>
				
				<!--<td> <?php// echo htmlentities(substr($row2['coleccion'],0,250),null,"UTF-8"); ?> </td>-->
				
				<!--<td> <?php// echo htmlentities(substr($row2['estado'],0,250),null,"UTF-8"); ?> </td>-->
				
				<!--<td> <a href="../repo/modulos/buscador/documentos/<?php// echo htmlentities($row2['documento'],null,"UTF-8"); ?>" id="link">Ver</a>-->
				<td width="34"><a href="index.php?mod=buscador&acc=detalle&id=<?php echo $row2['id']; ?>" ><img src="mas/img/ver.png" width="51" height="52"></a></td>
			</tr>
<?php endwhile; endif;?>
			
			

		</table>		
			<hr>
			
</div>
