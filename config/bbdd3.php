<?php
	$conectar = mysql_connect("127.0.0.1","root","asd123");
	if(!$conectar){
		die("Error: no se pudo conectar a la bbdd");
	}
	
	mysql_query("SET NAMES 'utf8'");
	
	$selectdb = mysql_select_db("permutas",$conectar);
	if(!$selectdb){
		die("Error: no existe la base de datos");
	}
	
?> 
