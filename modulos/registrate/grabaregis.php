<?php
	require_once "config/bbdd2.php";
	
	$user = $_POST['user'];
	
	$pass = $_POST['pass'];
	
	$nombre = $_POST['nombre'];
		
	$apellido = $_POST['apellido'];
	
	$dni = $_POST['dni'];
	
	$mail = $_POST['mail'];
	
	
	$consulta = "insert into registro_docentes values (null,'".$user."','".$pass."','".$nombre."','".$apellido."','".$dni."','".$mail."')";	
	
	$query = mysql_query($consulta);
	
	if(!$query):
?>
	<script type="text/javascript" language="javascript">
	
		alert("Sus datos no fueron grabados.");
	
		location.href="index.php?mod=registrate&acc=registrar";
	
	</script>

<?php else: ?>

	<script type="text/javascript" language="javascript">

		alert("Sus datos fueron grabados.");

		location.href="index.php?mod=registrate&acc=login";

	</script>

<?php endif; ?>
