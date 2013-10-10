<?php
	require_once "config/bbdd1.php";
	
	$titulo = $_POST['titulo']; $autor = $_POST['autor']; $fecha = $_POST['fecha']; $resumen = $_POST['resumen']; $coleccion = $_POST['coleccion']; 
	$src = $_FILES["documento"]["tmp_name"]; 
	$dst = "buscador/documentos".$_FILES["documento"]["name"];
	if(!move_uploaded_file($src,$dst)){
		echo ("no se grabo");
		exit();
	}
	
	$consulta = "insert into informacion values (null,'".$titulo."','".$autor."','".$fecha."','".$resumen."','".$coleccion."','".$_FILES["documento"]["name"]."')";
	
	$query = mysql_query($consulta);
	
	if(!$query):
?>
	<script type="text/javascript" language="javascript">
		alert("Sus datos no fueron grabados.");
		location.href="index.php?mod=buscador&acc=cargar";
	</script>
<?php else: ?>
	<script type="text/javascript" language="javascript">
		alert("Sus datos fueron grabados.");
		location.href="index.php?mod=buscador&acc=cargar";
	</script>
<?php endif; ?>
