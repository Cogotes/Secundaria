<?php
$conectar = mysql_connect("127.0.0.1","root","qw12rt34");
if (!$conectar) {
	die("no se puede conectar");
}

mysql_query("SET NAMES'utf8'");

$selectdb = mysql_select_db("permutas",$conectar);
if (!$selectdb) {
	die("no existe la base de datos");

}


?>