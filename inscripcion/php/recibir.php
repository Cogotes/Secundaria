<?php
include "conexion.php";
	$legajo = $_POST['legajo'];
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$dni = $_POST['dni'];
	$titulo = $_POST['titulo'];
	$localidad = $_POST['localidad'];
	$esta = $_POST['esta'];
	$cargo = $_POST['cargo'];
	$cargo1 = $_POST['cargo1'];
	$cargo2 = $_POST['cargo2'];
	$cargo3 = $_POST['cargo3'];
	$cargo4 = $_POST['cargo4'];
	$cargo5 = $_POST['cargo5'];
	$localidad1 = $_POST['localidad1'];
	$esta1 = $_POST['esta1'];
	$obser = $_POST['obser'];

$insertar = mysql_query("INSERT INTO permutas VALUES (null,'".$legajo."','".$nombre."','".$apellido."','".$dni."','".$titulo."','".$localidad."','".$esta."','".$cargo."','".$cargo1."','".$cargo2."','".$cargo3."','".$cargo4."','".$cargo5."','".$localidad1."','".$esta1."','".$obser."')");

if ($insertar) {
	echo "<a href='#' id='verPDF' >Ver PDF</a>";
}else{

	echo "mal";
}

 sleep( 1 );


?>
