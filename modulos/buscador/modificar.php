<div id="body">

<?php 
	include("../secundaria/modulos/login/comprobar.php");
	if ($_SESSION['permisos']!=1):
	
?>	
	<script type="text/javascript" language="javascript"> 
			alert ("Debes iniciar sessión");
			location.href ='index.php?mod=login&acc=loguear';
	</script>
<?php

		endif;
	require_once("config/bbdd2.php");
	$query = mysql_query("select * from datos_secu where id = ".$_GET["id"]);
if($row = mysql_fetch_array($query,MYSQL_ASSOC)):
?>

<script language=""="JavaScript">
    function conMayusculas(field) {
            field.value = field.value.toUpperCase()
}



</script>



<fieldset>
<h3>Modificar datos</h3>
</fieldset>

<form action="index.php?mod=buscador&acc=actualizar" method="post" name="formNoticia">

<table width="690" height="25" border="0" cellpadding="1" cellspacing="1" id="borde">


<tr bgcolor="e9e9e9">
<td class="tit-verde"> id:</td> 	
<td class="tit-verde"> Escuela:</td> 
<td class="tit-verde"> Nùmero:</td> 
<td class="tit-verde"> Localidad:</td> 
<td class="tit-verde"> Fecha:</td>
<td class="tit-verde"> Competencia:</td>
<td class="tit-verde"> Residencia:</td>
<td class="tit-verde"> Documento:</td> 
</tr>

<tr>
<td class="texto-comun"><input type="text" name="id" value="<?php echo htmlentities (substr ($row['id'],0,250),null,"UTF-8"); ?>" onChange="conMayusculas(this)"/></td> 
<td class="texto-comun"><input type="text" name="escuela" value="<?php echo htmlentities (substr ($row['escuela'],0,250),null,"UTF-8"); ?>" onChange="conMayusculas(this)"/></td>
<td class="texto-comun"><input type="text" name="numero" value="<?php echo htmlentities (substr ($row['numero'],0,250),null,"UTF-8"); ?>" onChange="conMayusculas(this)"/></td>
<td class="texto-comun"><input type="text" name="localidad" value="<?php echo htmlentities (substr($row['localidad'],0,250),null,"UTF-8"); ?>" onChange="conMayusculas(this)"/></td> 
<td class="texto-comun"><input type="date" name="fecha" id="fecha" value="<?php// echo htmlentities (substr ($row['fecha'],0,250),null,"UTF-8"); ?>" onChange="conMayusculas(this)"/></td>
<td class="texto-comun"><input type="text" name="competencia" value="<?php echo htmlentities (substr($row['competencia'],0,250),null,"UTF-8"); ?>" onChange="conMayusculas(this)"/></td> 
<td class="texto-comun"><input type="text" name="residencia" value="<?php echo htmlentities (substr($row['residencia'],0,250),null,"UTF-8"); ?>" onChange="conMayusculas(this)"/></td> 
<td class="texto-comun"><input type="text" name="documento" value="<?php echo htmlentities(substr($row['documento'],0,250),null,"UTF-8"); ?>"/>	</td>

<td height="44" colspan="3" align="center" class="texto-comun">
<input type="button" value="Grabar" onclick="enviar('formNoticia')">
<input type="button" value="Volver" onclick="history.back()">
<input type="reset" value="Limpiar">
</td>
</tr>
</table>
</form>
<?php endif; ?>
</tr>
</div>