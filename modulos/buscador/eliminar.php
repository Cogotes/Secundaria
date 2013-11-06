<?php
	include("../secundaria/modulos/login/comprobar.php");
	require_once "config/bbdd1.php"; 
	$consulta = "delete from datos_secu where id = '".$_GET['id']."'";
	$query = mysql_query($consulta);
	if(!$query):
?>
	<script type="text/javascript" >
		alert("Error no se Elimino.");
		location.href="index.php?mod=buscador&acc=buscadorEditar";
	</script>
<?php else: ?>
	<script type="text/javascript" >
		alert("Registro Borrado.");
		location.href="index.php?mod=inicio&acc=inicio";
	</script>
<?php endif; ?>
