<?php
	require_once "config/bbdd3.php";
	
	$consulta = "update DATOS set
					DNI = '".$_POST['DNI']."',
					APELLIDO_NOMBRE = '".$_POST['APELLIDO_NOMBRE']."',
					LEGAJO = '".$_POST['LEGAJO']."',
					localidad1 = '".$_POST['localidad1']."',
					establecimiento1 = '".$_POST['establecimiento1']."',
					cargo1 = '".$_POST['cargo1']."',
					horas1 = '".$_POST['horas1']."',
					permisos = '".$_POST['permisos']."'
					where LEGAJO = '".$_POST['LEGAJO']."'
					";

					// competencia = '".$_POST['competencia']."',
					// residencia = '".$_POST['residencia']."',
					// documento ='".$_POST['documento']."'
	//echo $consulta;
	//die; 
	//esta sentencia sirve para ver que error nos tira
	$query = mysql_query($consulta);
	if(!$query):
?>
	<script type="text/javascript" >
		alert("error intente de nuevo.");
		location.href="index.php?mod=login&acc=loguear_titular";
	</script>
<?php else: ?>
	<script type="text/javascript" >
		alert("datos actualizados.");
		location.href="index.php?mod=login&acc=logout";
	</script>
<?php endif; ?>
