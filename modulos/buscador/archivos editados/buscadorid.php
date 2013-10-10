<link text="text/css" rel="stylesheet" href="mas/css/css.css" />
		<link text="text/css" rel="stylesheet" href="mas/js/default/style.css" />

<link text="text/css" rel="stylesheet" href="mas/Zebra_pagination/public/css/Zebra_pagination.css" />		
<?php

require_once "config/bbdd2.php"; 


mysql_select_db($selectdb,$conectar);//llama a variable conexion selectdb

$query_Rs = "SELECT * FROM informacion WHERE coleccion"; 

?>

<table width="570" height="35" border="0" align="center" cellpadding="0" cellspacing="0">

<tr bgcolor="#fCfcfC">

<td width="442" class="Estilo10">

<span class="titulo-naranja"><strong>Buscar Id de Registros</strong></span>

<!----------buscador---------------------->

<form action="index.php" action="post" name="Buscar" id="Buscar">
	      <input type="hidden" name="mod" value="buscador">
	      <input type="hidden" name="acc" value="buscador">
	      <input class="input" type="text" size="20" value="">
        <butoon onClick="enviar()" value="Buscar">
</td>



</div></td>

</tr>

</table>


</tr>

</table>



