<div id="body">

<?php

require_once "config/bbdd3.php"; 
// Aqui se incluye la conexion a la base de datos

$currentPage = $_SERVER["PHP_SELF"];

$maxRows_Rs = 10;// este numero es el numero de resultados que quieren que se vean por pagina pueden poner algo asi: $maxRows_Rs = 6; para ver paginas con 6 resultados

$pageNum_Rs = 0;

if (isset($_GET['pageNum_Rs'])) {

$pageNum_Rs = $_GET['pageNum_Rs'];

}

$startRow_Rs = $pageNum_Rs * $maxRows_Rs;


mysql_select_db($database_pellegrini, $conectar);

$query_Rs = "SELECT * FROM datos_permu ORDER BY id DESC"; // SELECT Anterior



//Continúa en la página siguiente

if ($_GET['id']) // Si existe la variable "id" en la barra url...

{

$id = $_GET['id'];

$query_Rs = "SELECT * FROM datos_permu WHERE id = '$id' ORDER BY id DESC";

}

//*BUSCADOR DE REGISTROS!*/

if ($_GET['buscar'])

{

$buscar = $_GET['buscar'];


$query_Rs ="SELECT * FROM datos_permu WHERE escuela LIKE \"%$buscar%\" OR numero LIKE \"%$buscar%\" ORDER BY id DESC" ;

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
<fieldset><h3>Junta de Clasificación Nivel Secundaria Listas de Interinatos y Suplencias</h3></fieldset>
<fieldset><h3>Sede Resistencia</h3></fieldset>
<!-- comienzo tabla **************************************************************************************************-->
<td><table width="790" height="25" border="0" cellpadding="1" cellspacing="1" id="table">

<tr bgcolor="e9e9e9">

<td width="200" class="tit-verde">Escuela </td>

<td width="200" class="tit-verde">&nbsp;&nbsp;&nbsp;&nbsp;Número</td>

<td width="200" class="tit-verde">&nbsp;&nbsp;&nbsp;&nbsp;Localidad</td>

<td width="200"class="tit-verde">&nbsp;&nbsp;&nbsp;Fecha Actualización</td>

<td width="200"class="tit-verde">&nbsp;&nbsp;&nbsp;Competencia</td>

<td width="200"class="tit-verde">&nbsp;&nbsp;&nbsp;Residencia</td>

<td width="200" class="enlaces"><div align="center" class="tit-verde">Documento</div></td>

<?php do { ?>

<tr>

<td width="200" height="20" class="texto-chico"><div align="left" class="texto-comun"> <?php echo $row_Rs['escuela']; ?></div></td>

<td width="200" class="texto-chico"><div align="left" class="texto-comun"> <?php echo $row_Rs['numero']; ?></div></td>

<td width="200" class="texto-chico"><div align="left" class="texto-comun"> <?php echo $row_Rs['localidad']; ?></div></td>

<td width="200" height="20" class="texto-chico"><div align="left" class="texto-comun"> <?php echo $row_Rs['fecha']; ?></div></td>

<td width="120" class="texto-chico"><div align="left" class="texto-comun"><?php echo $row_Rs['competencia']; ?></div></td>

<td width="120" class="texto-chico"><div align="left" class="texto-comun"><?php echo $row_Rs['residencia']; ?></div></td>

<td class="texto-comun">	<a href="../secundaria/modulos/buscador/documentos/<?php echo $row_Rs['documento'];?>" id="link" target="_blank">ABRIR / DESCARGAR</a> </td>
<!--<div class="texto-comun" aling="left"><br><br>--><!--<a href="index.php?mod=buscador&acc=detalle&id=<?php// echo $row_Rs['id']; ?>"><?php// echo $row_Rs['documento']; ?> </a>--><!--</td></div>-->

</div></td>

</tr>


<?php } while ($row_Rs = mysql_fetch_assoc($Rs));

if ($colorfila==0){


$color= "#DEDEBE";


$colorfila=1;


}else{


$color="#F0F0F0";


$colorfila=0;


}

?>
<!-- 
</table></td>

</tr>
 -->
<!--<tr>

<td><table width="590" border="0" cellspacing="1" cellpadding="1" id="table">-->
<!--
<tr>
<td height="16"><img src="images/wna_linea_horiz.gif" width="580" height="1"></td>

</tr>

<tr>

<td height="5"><table width="590" height="80" border="0" cellpadding="0" cellspacing="0" id="table">
-->
<tr bgcolor="#FBFBFB">

<!--Continúa en la página siguiente-->
<td width="60" class="txt-paginador"><div align="left">

<?php if ($pageNum_Rs > 0) { // Show if not first page ?>

<a href="<?php printf("%s?pageNum_Rs=%d%s", $currentPage, 0, $queryString_Rs); ?>" class="txt-paginador">
	<strong>Primero</strong></a>

<?php } // Show if not first page ?>

</div></td>

<td width="300" class="txt-paginador"><div align="left">

<?php if ($pageNum_Rs > 0) { // Show if not first page ?>

<a href="<?php printf("%s?pageNum_Rs=%d%s", $currentPage, max(0, $pageNum_Rs - 1), 
$queryString_Rs); ?>" class="txt-paginador">
<strong> &lt; Anterior</strong></a>

<?php } // Show if not first page ?>

</div></td>

<td width="870"><div align="center" class="txt-paginador"><strong>

<?php

$last=$totalPages_Rs+1;

$current=$pageNum_Rs+1;

for ($i = 1; $i <= $last; $i++) {

if($current==$i){

echo $i." -";

}else{?>

<a href="<?php printf("%s?pageNum_Rs=%d%s", $currentPage, min($totalPages_Rs, $i-1), 
$queryString_Rs); ?>"><? echo $i;?></a>

<?php 

}

}

?>

</strong></div></td>

<td width="100"><div align="right" class="txt-paginador">

<?php if ($pageNum_Rs < $totalPages_Rs) { // Show if not last page ?>

<div align="center"><a href="<?php printf("%s?pageNum_Rs=%d%s", $currentPage, min($totalPages_Rs, $pageNum_Rs + 1), $queryString_Rs); ?>" class="txt-paginador"><strong>Siguiente &gt; </strong></a> </div>

<?php } // Show if not last page ?>

</div></td>

<td width="56"><div align="right">

<?php if ($pageNum_Rs < $totalPages_Rs) { // Show if not last page ?>

<div align="center" class="txt-paginador"><span class="txt-paginador"><a href="<?php printf("%s?pageNum_Rs=%d%s", $currentPage, $totalPages_Rs, $queryString_Rs); ?>" class="txt-paginador"><strong>Ultimo</strong></a></span> </div>

<?php } // Show if not last page ?>

</div>

<div align="center"></div>



<tr>

<td height="16"><div align="right" class="txt-paginador"><strong>Página:

<?

if($totalPages_Rs==0){

echo "0/0";

}else{

echo $pageNum_Rs+1;

echo "/";

echo $totalPages_Rs+1;

}

?>



<?php

mysql_free_result($Rs);

?>


</strong></div></td>

</tr>
<!--
</table>
<table border="0" cellpadding="0" cellspacing="0" id="borde-redon">

<tr>
	<td>

<pre>
Junta de Clasificación Nivel Secundaria

                        &copy; 2012 - Gobierno del Pueblo de la Provincia del Chaco               Ministerio de Educación Cultura Ciencia y técnologia
                        Director: Jos&eacute; Ra&uacute;l Eduardo Sim&oacute;n                                    Jefa de Departamento: Olga Luisa Arguello
                        Analista T&eacute;cnico Docente Adirana Mirian Sanchez                      Publicaciones en Internet: Juan Daniel Estevez 
                        Telefono:+54-362 4453008 Int. 4197                                   E-mail: meduc.documentacion@ecomchaco.com.ar      </pre>
</td>

</tr>




-->
</table>

<!-- fin tabla jajaja***************************************************************************************************************************-->
</body>


</html>
