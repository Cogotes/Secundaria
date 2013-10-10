<?php

include "../fpdf/fpdf.php";
include "conexion.php";

/**
 * 
 */
 class MIPDF extends FPDF {
 	
 	public function Header() {
 		$this -> Image( "../img/LOGOS-EDUCACION.jpg" ,30 ,10 ,150 ,30);
 		$this -> SetFont('Arial' , 'b', '14');
 		//$this -> Cell( 30, 1, utf8_decode("Dirección de Educación Superiór"), 4, 1, 'c');
 		$this -> Ln(30);
 	}
 } 

//$cabeceraT = array( "nombre", "apellido","dni","sede" );

 $MIPDF = new MIPDF();

 $MIPDF -> addPage();

//for ($i = 0; $i < count($cabeceraT) ; $i++)
{
	$MIPDF -> SetFont( 'Arial' , 'B' , 12);
	$MIPDF -> SetTextColor( 155, 155, 155);
	//$MIPDF -> Cell ( 100 , 10 , $cabeceraT[ $i ], 1, 1,'l',false);

}

 $MIPDF -> Ln(10);
$eldni = $_GET['eldni'];
 $consulta = mysql_query("SELECT * FROM permutas where dni = '".$eldni."' ");

//echo "SELECT * FROM inscripcion where dni = '".$eldni."' ";
//die; 
 while ($datos = mysql_fetch_array($consulta)) {
 	$id = $datos ['id'];
 	$legajo = $datos [ 'legajo'];
 	$nombre = $datos [ 'nombre'];
 	$apellido = $datos [ 'apellido'];
 	$dni = $datos [ 'dni'];
 	$titulo = $datos ['titulo'];
 	$localidad = $datos [ 'localidad'];
 	$esta = $datos [ 'esta'];
 	$cargo = $datos [ 'cargo'];
 	$cargo1 = $datos [ 'cargo1'];
 	$cargo2 = $datos [ 'cargo2'];
 	$cargo3 = $datos [ 'cargo3'];
 	$cargo4 = $datos [ 'cargo4'];
 	$cargo5 = $datos [ 'cargo5'];
 	$localidad1 = $datos [ 'localidad1'];
 	$esta1 = $datos [ 'esta1'];
 	$obser = $datos [ 'obser']; 	

 	$MIPDF -> Cell (120, 10,utf8_decode("Junta de Clasificación Nivel Secundaria Resistencia"), 12, true);
 	$MIPDF -> Ln(10);


 	$MIPDF -> Cell (1, 10,utf8_decode("Nº inscripción:     ".utf8_decode($id)."") ,12, true);
 	$MIPDF -> Ln(10);


 	$MIPDF -> Cell (1, 10,utf8_decode("Nº legajo:     ".utf8_decode($legajo)."") ,12, true);
 	$MIPDF -> Ln(10);


 	$MIPDF -> Cell (0, 10,"Nombre : ".utf8_decode($nombre)."" ,12);//( 0, 10 , $nombre, 1, 1, 'r', false);
 	$MIPDF -> Ln(10);

 	$MIPDF -> Cell (0, 10,"Apellido : ".utf8_decode($apellido)."" ,12);
 	$MIPDF -> Ln(10);
 	
 	$MIPDF -> Cell (0, 10,"DNI : ".utf8_decode($dni)."" ,12);
 	//	$MIPDF -> Cell ( 0, 10 , $dni, 1, 1, 'r', false);
 	$MIPDF -> Ln(10);

 	$MIPDF -> Cell (0, 10,utf8_decode("Título : ").utf8_decode($titulo)."" ,12);
	$MIPDF -> Ln(10);
	$MIPDF -> Ln(10);
	$MIPDF -> Ln(10);

	$MIPDF -> Cell (120, 10,utf8_decode("Datos Laborales que Desea Permutar"), 12, true);
 	$MIPDF -> Ln(10);

	$MIPDF -> Cell (0, 10,"localidad : ".utf8_decode($localidad)."" ,12);
	$MIPDF -> Ln(10);
 	
 	$MIPDF -> Cell (0, 10,utf8_decode("Establecimiento : ").utf8_decode($esta)."" ,12);
	$MIPDF -> Ln(10);
 
	$MIPDF -> Cell (0, 10,utf8_decode("Cargo o Asignatura : ").utf8_decode($cargo)."" ,12);
	$MIPDF -> Ln(10);
 
 	$MIPDF -> Cell (0, 10,utf8_decode("Cargo o Asignatura : ").utf8_decode($cargo1)."" ,12);
	$MIPDF -> Ln(10);
 
 	$MIPDF -> Cell (0, 10,utf8_decode("Cargo o Asignatura : ").utf8_decode($cargo2)."" ,12);
	$MIPDF -> Ln(10);

	$MIPDF -> Cell (0, 10,utf8_decode("Cargo o Asignatura : ").utf8_decode($cargo3)."" ,12);
	$MIPDF -> Ln(10);

	$MIPDF -> Cell (0, 10,utf8_decode("Cargo o Asignatura : ").utf8_decode($cargo4)."" ,12);
	$MIPDF -> Ln(10);

	$MIPDF -> Cell (0, 10,utf8_decode("Cargo o Asignatura : ").utf8_decode($cargo5)."" ,12);
	$MIPDF -> Ln(10);
	$MIPDF -> Ln(10);
	$MIPDF -> Ln(10);
	$MIPDF -> Ln(10);
	 
 	 
	$MIPDF -> Cell (120, 10,utf8_decode("Lugar de destino donde deseo permutar"), 12, true);
	$MIPDF -> Ln(10);

	$MIPDF -> Cell (0, 10,utf8_decode("localidad  : ").utf8_decode($localidad1)."" ,12);
	$MIPDF -> Ln(10);

		$MIPDF -> Cell (0, 10,utf8_decode("Establecimiento : ").utf8_decode($esta1)."" ,12);
	$MIPDF -> Ln(10);
	$MIPDF -> Ln(10);



	$MIPDF -> Cell (0, 10,utf8_decode("Obsevaciones :") ,12);
 	$MIPDF -> Ln(10);
 	
 	$MIPDF -> MultiCell (180, 5, utf8_decode($obser));
 	//$MIPDF -> Cell ( 0, 14 , $carta, 1, 1, 'r', false);
 	$MIPDF -> Ln(10);

 	$MIPDF -> Ln(10);
 	$MIPDF -> Ln(10);
 	//$MIPDF -> Cell ( 0, 10 , $sede, 1, 1, 'r', false);

 	}

 $MIPDF -> Output();


?>