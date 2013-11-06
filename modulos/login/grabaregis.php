<?php
	require_once "config/bbdd2.php";
	
	$user = $_POST['user'];
	
	$pass = $_POST['pass'];
	
	$pass1 = $_POST['pass1'];
	
	$apellido = $_POST['apellido'];
	
	$nombre = $_POST['nombre'];
	
	$telefono = $_POST['telefono'];
	
	$mail = $_POST['mail'];
	
	$permisos = $_POST['permisos'];
	
	$consulta = "insert into usuarios values (null,'".$user."','".$pass."','".$pass1."','".$apellido."','".$nombre."','".$telefono."','".$mail."','".$permisos."')";	
	
	$query = mysql_query($consulta);
	
	if(!$query):
?>
	<script type="text/javascript" language="javascript">
	
		alert("Sus datos no fueron grabados.");
	
		location.href="index.php?mod=cargar&acc=registrar";
	
	</script>

<?php else: ?>

	<script type="text/javascript" language="javascript">

		alert("Sus datos fueron grabados.");

		location.href="index.php?mod=cargar&acc=cargar";

	</script>

<?php endif; ?>