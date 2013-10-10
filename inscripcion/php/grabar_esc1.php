<?php
	include "conexionbbdd.php";
	
	$legajo = $_POST['legajo'];

	
//1

	$localidad1 = $_POST['localidad1'];
	
	$establecimiento1 = $_POST['establecimiento1'];
	
	$cargo1 = $_POST['cargo1'];
	
	$horas1 = $_POST['horas1'];

//2
	
	$localidad2 = $_POST['localidad2'];
	
	$establecimiento2 = $_POST['establecimiento2'];
	
	$cargo2 = $_POST['cargo2'];
	
	$horas2 = $_POST['horas2'];

//3
	$localidad3 = $_POST['localidad3'];
	
	$establecimiento3 = $_POST['establecimiento3'];
	
	$cargo3 = $_POST['cargo3'];
	
	$horas3 = $_POST['horas3'];
//4
	$localidad4 = $_POST['localidad4'];
	
	$establecimiento4 = $_POST['establecimiento4'];
	
	$cargo4 = $_POST['cargo4'];
	
	$horas4 = $_POST['horas4'];

		
	$consulta = "insert into escuela_1 values (null,'".$legajo."','".$localidad1."','".$establecimiento1."','".$cargo1."','".$horas1."','".$localidad2."','".$establecimiento2."','".$cargo2."','".$horas2."','".$localidad3."','".$establecimiento3."','".$cargo3."','".$horas3."','".$localidad4."','".$establecimiento4."','".$cargo4."','".$horas4."')";	
	
	$query = mysql_query($consulta);
	
	if(!$query):
?>
	<script type="text/javascript" language="javascript">
	
		alert("error revise los campos");
	
		location.href="../index_esc1.html";
	
	</script>

<?php else: ?>

	<script type="text/javascript" language="javascript">

		alert("Sus datos fueron grabados.");

		location.href="../../index.php";

	</script>

<?php endif; ?>