<?php 
	include("../secundaria/modulos/login/comprobar.php");
	if ($_SESSION['permisos']!=2):
	
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
	<link text="text/css" rel="stylesheet" href="mas/js/default/style.css" />
	<div id="body">
	<pre id="link"> <h3>  	Editar datos cargados </h3>	</pre><hr />
		
	<form action="index.php?mod=buscador&acc=actualizar2" method="post" name="formNoticia">
	
	<input type="hidden" name="id" value="<?php echo htmlentities (substr ($row['id'],0,250),null,"UTF-8"); ?>" />
	
		<table width="848" height="372" align="center">
<tr>
<td bgcolor="#BBDDDD"><label>Titulo:</label></td><br />
</tr>
<tr>
<td width="840"><input type="text" name="titulo" value="<?php echo htmlentities (substr ($row['titulo'],0,250),null,"UTF-8"); ?>" onChange="conMayusculas(this)" size="120"/></td>
</tr><br />
<tr>
<td bgcolor="#BBDDDD"><label>Tipo:</label></td>
</tr>
<tr>
<td width="840"><input type="text" name="tipo" value="<?php echo htmlentities (substr ($row['tipo'],0,250),null,"UTF-8"); ?>" onChange="conMayusculas(this)" size="120"/></td>
</tr>
<tr><td bgcolor="#BBDDDD"><label>N&uacute;mero:</label></td></tr>
<tr>	
<td><input type="text" name="numero" width="420" value="<?php echo htmlentities (substr($row['numero'],0,250),null,"UTF-8"); ?>" onChange="conMayusculas(this)" size="120"/></td>
</tr>
</tr>
<tr><td bgcolor="#BBDDDD"><label>P&uacute;blicado en:</label></td></tr>
<tr>
<td width="840"><input type="text" name="publicada" value="<?php echo htmlentities (substr ($row['publicada'],0,250),null,"UTF-8"); ?>" onChange="conMayusculas(this)" size="120"/></td>
</tr>
</tr>
<tr><td bgcolor="#BBDDDD"><label>Autor:</label></td></tr>
<tr>
<td width="840"><input type="text" name="autor" value="<?php echo htmlentities (substr($row['autor'],0,250),null,"UTF-8"); ?>" onChange="conMayusculas(this)" size="120"/></td>
</tr>
</tr>
<tr><td bgcolor="#BBDDDD">Fecha:</td></tr>
<tr>
<td width="840">
  <input type="date" name="fecha" value="<?php echo htmlentities (substr($row['fecha'],0,250),null,"UTF-8"); ?>"/></td>
</tr>
<tr><td bgcolor="#BBDDDD"><label>Resumen:</label></td></tr>
<tr><td><input name="resumen" type="text" onchange="conMayusculas(this)" value="<?php echo htmlentities (substr ($row['resumen'],0,250),null,"UTF-8"); ?>" size="120" /></td>
</tr>
<tr><td bgcolor="#BBDDDD"><label>Descriptores:</label></td></tr>
<tr>
<td><input type="text" name="coleccion" value="<?php echo htmlentities (substr($row['coleccion'],0,250),null,"UTF-8"); ?>" onChange="conMayusculas(this)" size="120"/></td>
</tr>
<tr><td bgcolor="#BBDDDD"><label>Modifica A:</label></td></tr>
<tr><td><input name="modifica" type="text" onchange="conMayusculas(this)" value="<?php echo htmlentities (substr ($row['modifica'],0,250),null,"UTF-8"); ?>" size="120" /></td>
</tr>
<tr><td bgcolor="#BBDDDD"><label>Modificado Por:</label></td></tr>
<tr>
<td><input name="modificada_por" type="text" onchange="conMayusculas(this)" value="<?php echo htmlentities (substr ($row['modificada_por'],0,250),null,"UTF-8"); ?>" size="120" /></td>
</tr>
<tr><td bgcolor="#BBDDDD"><p>Estado</td></tr>
<td align="center">
<label><input type="radio" name="estado" value="VIGENTE" <?php echo $row["estado"]; ?>/>Vigente</label>
<label><input type="radio" name="estado" value="MODIFICADA" <?php echo $row["estado"]; ?>/>Modificada</label>
<label><input type="radio" name="estado" value="DEROGADA" <?php echo $row["estado"]; ?>/>Derogada</label><br /></p>	</td>
<!--campos en mysql tabla ENUM 'VIGENTE','MODIFICADA','DEROGADA'-->
</tr>
<tr><td bgcolor="#BBDDDD"><label>Descriptor Geogr&aacute;fico:</label></td></tr>		
<tr>
<td><input name="geografico" type="text" onchange="conMayusculas(this)" value="<?php echo htmlentities (substr ($row['geografico'],0,250),null,"UTF-8"); ?>" size="120" /></td>
</tr>
<!--<tr><td bgcolor="#3399FF">Documento:</td></tr>		
<tr><td><input type="text" name="documento" value="<?php// echo htmlentities(substr($row['documento'],0,250),null,"UTF-8"); ?>"  size="120"/></td>
</tr>-->	
<tr>
<td height="44" colspan="3" align="center">
	<input type="button" value="Grabar" onclick="enviar('formNoticia')">
	<input type="button" value="Volver" onclick="history.back()">
	<input type="reset" value="Limpiar">
	
	</td>
	</tr>
	</table>
	
<?php endif; ?>
	</div>
