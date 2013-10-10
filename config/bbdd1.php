<?php
	$conectar = mysql_connect("localhost","v0020840","po67baSUmu");
	if(!$conectar){
		die("Error: no se pudo conectar a la bbdd");
	}
	
	mysql_query("SET NAMES 'utf8'");
	
	$selectdb = mysql_select_db("v0020840_buscadorlibros",$conectar);
	if(!$selectdb){
		die("Error: no existe la base de datos");
	}
	
?> 
