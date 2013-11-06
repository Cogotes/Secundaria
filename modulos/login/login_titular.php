<?php
	require_once "config/bbdd3.php";
	
	$consulta = "select * from datos_permu where DNI = '".$_POST['DNI']."' and LEGAJO = '".($_POST['LEGAJO'])."'";
	/*
	*envia la consulta a la base de datos
	*/
	$query = mysql_query($consulta);
	/*
	*cantidad registros que genero la consulta
	*/
	$numero = mysql_num_rows($query);
	
	if($numero == 0){

		
?>

<script type="text/javascript" language="javascript"> 
			alert ("Incorrecto");
			location.href ='index.php?mod=login&acc=loguear_titular';
</script>
<?php
	}else{
	/*
	*devuelve una matriz con los datos de la consulta
	*/
	
		$DNI = mysql_fetch_array($query);
		$_SESSION["DNI"]=$DNI['DNI'];
		/*
		*la matriz user contiene todos los datos de la consulta
		*/
		$_SESSION["permisos"]=$DNI['permisos'];
		$_SESSION["DNI"]=$_POST['DNI'];
		$_SESSION["loginTrue"]=TRUE;
	}
?>
        <script language='JavaScript'>;
        location.href="index.php?mod=buscador&acc=modificar_titular&LEGAJO=<?php echo $_POST['LEGAJO']; ?>";
		//location.href ='index.php?mod=buscador&acc=permutas';
		</script>;

