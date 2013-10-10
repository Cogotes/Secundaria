<?php
	include "conexionbbdd.php";
	
	$legajo = $_POST['legajo'];
	
	$nombre = $_POST['nombre'];
	

	$apellido = $_POST['apellido'];
	
	$dni = $_POST['dni'];

	$titulo1 = $_POST['titulo1'];

	$titulo2 = $_POST['titulo2'];
		
	$consulta = "insert into usuario values (null,'".$legajo."','".$nombre."','".$apellido."','".$dni."','".$titulo1."','".$titulo1."')";	
	
	$query = mysql_query($consulta);
	
	if(!$query):
?>
	<script type="text/javascript" language="javascript">
	
		alert("error revise los campos");
	
		location.href="../index_datos.html";
	
	</script>

<?php else: ?>

	<script type="text/javascript" language="javascript">

		alert("Sus datos fueron grabados.");

		location.href="../../index.php";

	</script>

<?php endif; ?>