<?php 
include("../repo/modulos/login/comprobar.php");
?>
<?php
	/*grabar archivo en caso que ya se halla subido*/
	if(isset($_POST["btoGrabar"])){
		
		require_once "config/bbdd2.php";
		
		$titulo = $_POST['titulo'];$tipo = $_POST['tipo'];$resumen = $_POST['resumen']; 		
		$consulta = "insert into ayuda values (null,'".$titulo."','".$tipo."','".$resumen."')";
		
		$query = mysql_query($consulta);
		
		if(!$query):
	?>
		<script type="text/javascript" language="javascript">
			alert("Sus datos no fueron grabados.");
			location.href="index.php?mod=buscador&acc=cargar";
		</script>
	<?php else: ?>
		<script type="text/javascript" language="javascript">
			alert("Sus datos fueron grabados.");
			location.href="index.php?mod=buscador&acc=cargar";
		</script>
	<?php 
		endif; 
		
	}
	
	?>
	<style type="text/css">
<!--
.Estilo1 {
color: #0000FF;
}
.Estilo2 {color: #000000}

-->
    </style>
	<script language=""="JavaScript">
<!--
function conMayusculas(field) {
            field.value = field.value.toUpperCase()
}

function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>
<link text="text/css" rel="stylesheet" href="mas/js/default/style.css" />
<div id="body"> 
 <pre id="link"> <h3>Cargar registros</h3> <!--index.php?mod=buscador&acc=grabar--></pre><hr />
<form action="" method="post" name="formNoticia">
	<table width="837" height="234" align="center" border="1">
<tr><td><label><br />
Titulo: </label>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="titulo" onChange="conMayusculas(this)"/></td></tr>
<tr><td><label><br />
Tipo: </label>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="tipo" onChange="conMayusculas(this)" placeholder="Ej: RM LE DE"/></td></tr>


<tr><td><label><br />
Resumen:</label>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type"text" name="resumen" title="resumen" onChange="conMayusculas(this)"/></td></tr>

	
	<td  colspan="3" align="right">
	  <p>&nbsp;</p>
	  <p>
	    <input type="submit" value="Grabar" name="btoGrabar">
	    <input type="button" value="Volver" onclick="history.back()">
	    <input type="reset" value="Limpiar">
	      </p>
	</table>
  </form>
  </div>
