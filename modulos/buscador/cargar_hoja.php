<div id="body">

<?php 
include("../secundaria/modulos/login/comprobar.php");
?>
<?php
	/*grabar archivo en caso que ya se halla subido*/
	if(isset($_POST["btoGrabar"])){
		
		require_once "config/bbdd1.php";
		
		$file = $_POST['fileUpload'];
		
		$consulta = "insert into hoja_secu values (null,'".$file."')";
		
		$query = mysql_query($consulta);
		
		if(!$query):
	?>
		<script type="text/javascript" language="javascript">
			alert("Sus datos no fueron grabados.");
			location.href="index.php?mod=inicio&acc=inicio";
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

<script ="text/javascript" language="javascript">
function conMayusculas(field) {
            field.value = field.value.toUpperCase()
}

function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
</script>


<link text="text/css" rel="stylesheet" href="mas/js/default/style.css" />


 

	<form action="" method="post" name="formNoticia" enctype="multipart/form-data">
	
	<table width="300" height="10" border="0" cellpadding="1" cellspacing="1" id="borde">  


	<tr><td>
		<h3>Carga Hoja Informativa</h3>
	</td></tr>


<tr bgcolor="e9e9e9">
	
	<br>

<?php

	if(isset($_POST["btoSubir"])){
		$src = $_FILES["documento"]["tmp_name"];
		$dst = "modulos/buscador/documentos/documento/".utf8_decode($_FILES["documento"]["name"]);
		if(!move_uploaded_file($src,$dst)){
			exit($dst);
			echo "<script type='text/javascript'> location.href='index.php?mod=buscador&acc=cargar';</script>";
			exit();
		}
		$fileN = $_FILES["documento"]["name"];
		echo "<tr><td>Documento: $fileN <input type='hidden' name='fileUpload' value='$fileN'></td></tr>";
	}else{
		echo "<tr><td><input type='file' name='documento'/>
			  <input type='submit' name='btoSubir' value='Subir' >			 
			  </td>      ";
	}
	?>

	<td  colspan="2" align="right">
	<input type="submit" value="Grabar" name="btoGrabar">
	    <input type="button" value="Volver" onclick="history.back()">
	    <input type="reset" value="Limpiar">
	</td>
	    
	  </tr>
	</table>
  </form>
  </div>
