<?php

	require_once "config/bbdd1.php";
	$consulta = "update informacion set
					titulo = '".$_POST['titulo']."',
					tipo = '".$_POST['tipo']."',
					numero = '".$_POST['numero']."',
					publicada = '".$_POST['publicada']."',
					autor = '".$_POST['autor']."',
					fecha = '".$_POST['fecha']."',
					resumen = '".$_POST['resumen']."',
					coleccion = '".$_POST['coleccion']."',
					modifica = '".$_POST['modifica']."',
					modificada_por = '".$_POST['modificada_por']."',
					estado = '".$_POST['estado']."',
					geografico = '".$_POST['geografico']."'					
					where id = '".$_POST['id']."'
					";
					//documento = '".$_POST['documento']."' para que no se modifique el numero
	//echo $consulta;
//	die; esta sentencia sirve para ver que error nos tira
	$query = mysql_query($consulta);
	if(!$query):
?>
	<script type="text/javascript" >
		alert("NO se actualizo.");
		location.href="index.php?mod=inicio&acc=inicio";
	</script>
<?php else: ?>
	<script type="text/javascript" >
		alert("Sus datos fueron actualizados.");
		location.href="index.php?mod=inicio&acc=inicio";
	</script>
<?php endif; ?>

