<div id="body">

<?php

require_once "config/bbdd3.php"; 
// Aqui se incluye la conexion a la base de datos

//$currentPage = $_SERVER["PHP_SELF"];

$maxRows_Rs = 30;// este numero es el numero de resultados que quieren que se vean por pagina pueden poner algo asi: $maxRows_Rs = 6; para ver paginas con 6 resultados

$pageNum_Rs = 0;

if (isset($_GET['pageNum_Rs'])) {

$pageNum_Rs = $_GET['pageNum_Rs'];

}

$startRow_Rs = $pageNum_Rs * $maxRows_Rs;


//mysql_select_db($database_pellegrini, $conectar);

$query_Rs = "SELECT * FROM  datos_permu ORDER BY datos_permu.localidad1 DESC";

// $query_Rs = "SELECT DATOS.DNI , DATOS.APELLIDO_NOMBRE , DATOS.LEGAJO , escuela_1.localidad1 , escuela_1.establecimiento1 , escuela_1.cargo1 , escuela_1.horas1
// FROM DATOS
// INNER JOIN escuela_1 
// ON DATOS.LEGAJO = escuela_1.legajo  ";


//Continúa en la página siguiente

if ($_GET['id']) // Si existe la variable "id" en la barra url...

{

$id = $_GET['id'];


$query_Rs ="SELECT * FROM  datos_permu ORDER BY datos_permu.localidad1 DESC";
//$query_Rs = "SELECT * FROM DATOS ";

}

//*BUSCADOR DE REGISTROS!*/

if ($_GET['buscar'])

{

$buscar = $_GET['buscar'];

$query_Rs ="SELECT * FROM  datos_permu ORDER BY datos_permu.localidad1 DESC";
$query_Rs ="SELECT * FROM datos_permu WHERE LEGAJO LIKE \"%$buscar%\" OR DNI LIKE \"%$buscar%\" ORDER BY id DESC" ;

}

$query_limit_Rs = sprintf("%s LIMIT %d, %d", $query_Rs, $startRow_Rs, $maxRows_Rs);

$Rs = mysql_query($query_limit_Rs, $conectar) or die(mysql_error());

$row_Rs = mysql_fetch_assoc($Rs);


if (isset($_GET['totalRows_Rs'])) {

$totalRows_Rs = $_GET['totalRows_Rs'];

} else {

$all_Rs = mysql_query($query_Rs);

$totalRows_Rs = mysql_num_rows($all_Rs);

}

$totalPages_Rs = ceil($totalRows_Rs/$maxRows_Rs)-1;


$queryString_Rs = "";

if (!empty($_SERVER['QUERY_STRING'])) {

$params = explode("&", $_SERVER['QUERY_STRING']);

$newParams = array();

foreach ($params as $param) {

if (stristr($param, "pageNum_Rs") == false &&

stristr($param, "totalRows_Rs") == false) {

array_push($newParams, $param);

}

}

if (count($newParams) != 0) {

$queryString_Rs = "&" . htmlentities(implode("&", $newParams));

}

}

$queryString_Rs = sprintf("&totalRows_Rs=%d%s", $totalRows_Rs, $queryString_Rs);

?>





<fieldset><h3>Permuta</h3></fieldset>


<!-- comienzo tabla **************************************************************************************************-->


<table width="790" height="25" class="CSSTableGenerator">

<tr>
<!-- <td>Lugar actual   Deseo permutar</td> -->
<!-- <td></td>
<td>Detalles</td>
 --><!-- <td> Legajo Apellido y Nombre</td> -->
<!-- <td>actual</td>
<td>Destino</td>
 
 <td>detalles</td>

-->
</tr>


<?php do { ?>

<!-- <tr class="CSSTableGenerator"> -->

<!-- <td>

	<div> 
 	
 	<?php// echo $row_Rs['LEGAJO']; ?> 

	<?php// echo $row_Rs['APELLIDO_NOMBRE']; ?>

	</div>

</td>
 -->



<tr>

<td>



	<div id="linka">LOCALIDAD ACTUAL: <font color="black"><?php echo $row_Rs['localidad1']; ?></font></div>          

 <div id="linka">PERMUTAR A: <font color="black"> <?php echo $row_Rs['localidad2']; ?></font></div> 

<div id="link"> <a href="index.php?mod=buscador&acc=detalle_titular&LEGAJO=<?php echo $row_Rs['LEGAJO']; ?>">Ver detalles... </a> </div>
<?php// echo $row_Rs['establecimiento1']; ?>
<?php// echo $row_Rs['cargo1']; ?>
<?php// echo $row_Rs['horas1']; ?>
	


</td>

<!-- 
<td>

	


<?php// echo $row_Rs['establecimiento2']; ?>
<?php// echo $row_Rs['cargo2']; ?>
<?php// echo $row_Rs['horas2']; ?>
	

</td>
 -->
<!-- <td>

	

<?php// echo $row_Rs['localidad3']; ?>
<?php// echo $row_Rs['establecimiento3']; ?>
<?php// echo $row_Rs['cargo3']; ?>
<?php// echo $row_Rs['horas3']; ?>





	

</td> -->

</tr>

</table>



<table width="790" height="25" class="CSSTableGenerator">



<tr>

<td>	





<?php } while ($row_Rs = mysql_fetch_assoc($Rs));

if ($colorfila==0){


$color= "#DEDEBE";


$colorfila=1;


}else{


$color="#F0F0F0";


$colorfila=0;


}

?>

<a href="<?php printf("%s?pageNum_Rs=%d%s", $currentPage, 0, $queryString_Rs); ?>" class="txt-paginador">

	<strong>Inicio</strong></a>

<a href="<?php printf("%s?pageNum_Rs=%d%s", $currentPage, max(0, $pageNum_Rs - 1), $queryString_Rs); ?>" class="txt-paginador"> <strong> &lt;&lt;&lt;&lt;&lt;&lt;</strong></a>

	<?

if($totalPages_Rs==0){

echo "0/0";

}else{

echo $pageNum_Rs+1;

echo "/";

echo $totalPages_Rs+1;

}

?>
<a href="<?php printf("%s?pageNum_Rs=%d%s", $currentPage, min($totalPages_Rs, $pageNum_Rs + 1), $queryString_Rs); ?>" class="txt-paginador"> <strong>&gt;&gt;&gt;&gt;&gt;&gt; </strong></a>
<a href="<?php printf("%s?pageNum_Rs=%d%s", $currentPage, $totalPages_Rs, $queryString_Rs); ?>" class="txt-paginador"><strong>Fin</strong></a>




	<div align="left">

	<?php if ($pageNum_Rs > 0) { // Show if not first page ?>



<?php } // Show if not first page ?>



</div>






	<div align="left">



<?php if ($pageNum_Rs > 0) { // Show if not first page ?>





<?php } // Show if not first page ?>


</div>

<div align="center" class="txt-paginador"><strong>

<?php

$last=$totalPages_Rs+1;

$current=$pageNum_Rs+1;

for ($i = 1; $i <= $last; $i++) {

if($current==$i){

echo $i." -";

}else{?>

<a href="<?php printf("%s?pageNum_Rs=%d%s", $currentPage, min($totalPages_Rs, $i-1), $queryString_Rs); ?>"><? echo $i;?></a>

<?php 

}

}

?>


</strong>

</div>



<div align="right" class="txt-paginador">


<?php if ($pageNum_Rs < $totalPages_Rs) { // Show if not last page ?>


<div align="center">


 </div>


<?php } // Show if not last page ?>

</div>


<div align="right">

<?php if ($pageNum_Rs < $totalPages_Rs) { // Show if not last page ?>

<div align="center" class="txt-paginador">

	<span class="txt-paginador"></span> </div>

<?php } // Show if not last page ?>

</div>

<div align="center">
</div>








<?php

mysql_free_result($Rs);

?>
</td>
</tr>

</table>

<!-- fin tabla jajaja***************************************************************************************************************************-->
</body>


</html>
