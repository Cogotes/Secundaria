<?php
	require_once "config/bbdd4.php";
	$consulta = "update datos_secu set
					escuela = '".$_POST['escuela']."',
					numero = '".$_POST['numero']."',
					localidad = '".$_POST['localidad']."',
					fecha = '".$_POST['fecha']."',
					competencia = '".$_POST['competencia']."',
					residencia = '".$_POST['residencia']."',
					documento ='".$_POST['documento']."'
					where id = '".$_POST['id']."'
					";
	//echo $consulta;
	//die; 
	//esta sentencia sirve para ver que error nos tira
	$query = mysql_query($consulta);
	if(!$query):
?>
	<script type="text/javascript" >
		alert("error intente de nuevo.");
		location.href="index.php?mod=inicio&acc=modificar";
	</script>
<?php else: ?>
	<script type="text/javascript" >
		alert("datos actualizados.");
		location.href="index.php?mod=inicio&acc=inicio";
	</script>
<?php endif; ?>

