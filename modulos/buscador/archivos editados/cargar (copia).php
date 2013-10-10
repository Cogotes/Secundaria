<?php 
include("../repo/modulos/login/comprobar.php");
?>
<?php
	/*grabar archivo en caso que ya se halla subido*/
	if(isset($_POST["btoGrabar"])){
		
		require_once "config/bbdd1.php";
		
		$titulo = $_POST['titulo'];$tipo = $_POST['tipo'];$numero = $_POST['numero'];$publicado = $_POST['publicado']; $autor = $_POST['autor']; $fecha = $_POST['fecha']; $resumen = $_POST['resumen']; $coleccion = $_POST['coleccion'];$modifica = $_POST['modifica'];$modificada_por = $_POST['modificada_por'];$estado = $_POST['estado'];$geografico = $_POST['geografico']; 
		$file = $_POST['fileUpload'];
		
		$consulta = "insert into informacion values (null,'".$titulo."','".$tipo."','".$numero."','".$publicada."','".$autor."','".$fecha."','".$resumen."','".$coleccion."','".$modifica."','".$modificada_por."','".$estado."','".$geografico."','".$file."')";
		
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

	<script language=""="JavaScript">
<!-- ACA VA CSS DE JQUERY-->

 #caja
 {
 background-color: gray;
 width: 200px;
 height: 150px;
 opacity:1;
 float:left;
 }
 p
 {
 color:black;
 padding: 10px;
 font-size: 1.2em;
 }
 </style>



<!--ACA TERMINA -->


<!--
function conMayusculas(field) {
            field.value = field.value.toUpperCase()
}

function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
<!-- FUNCIONES DEL JQUERY QUE ANDE POR FA//-->

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js"type="text/javascript"></script>
 <script type ="text/javascript">
 function onload(){}
 function  animar() {
 
 $('#caja').animate({width:'400px',height:'300px'},1500);
 
 }
  
 function desaparece()
 {
 $('#caja').fadeOut(1500);
 }
 function desaparece1()
 {
 $('#caja1').fadeOut(1500);
 }

 function desaparece2()
 {
 $('#caja2').fadeOut(1500);
 }

function desaparece3()
 {
 $('#caja3').fadeOut(1500);
 }

function desaparece4()
 {
 $('#caja4').fadeOut(1500);
 }

 function desaparece5()
 {
 $('#caja5').fadeOut(1500);
 }

function desaparece6()
 {
 $('#caja6').fadeOut(1500);
 }

 function desplegar()
 {
 $('#caja').slideDown(1000);
 }
 function slide()
 {
 $('#caja').slideUp(1000);
 }
 function reset()
 {
 $('#caja').animate({
 width: '200px',
 height: '150px',
 opacity:1
 },2000);
 }
 </script>
 </head>

<!--ACA FINALIZA-->
</script>


<link text="text/css" rel="stylesheet" href="mas/js/default/style.css" />


		<div id="body"> 
 

 			<pre id="link"> <h3>Cargar registros</h3> <!--index.php?mod=buscador&acc=grabar--></pre><hr />


	<form action="" method="post" name="formNoticia" enctype="multipart/form-data">
	

	<table width="837" height="234" align="center" border="1">


	<tr>
		<td>
			<label><br /> Titulo: </label> 
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="titulo" onChange="conMayusculas(this)"/> 


<!--  efectos jquery-->
 <input type="button" value="Ayuda" onclick="$('#caja').fadeIn(1000);"/>
 
 <!--<input type="button" onclick="animar();" value="Ayuda"/>
 <input type="button" onclick="slide();" value="Recoger"/>
 <input type="button" onclick="desplegar();" value="Desplegar"/>
 <input type="button" onclick="reset();" value="reset"/>-->
 <br/>
 
 <div id="caja" onclick="desaparece()">
  
  		<p>Breve referencia al tema en no mas de 100 caracteres</p>

 </div>


		</td>

	</tr>

	<tr>
		<td>
				<label><br /> Tipo: </label>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="tipo" onChange="conMayusculas(this)"/>

<!--  efectos jquery-->
 <input type="button" value="Ayuda" onclick="$('#caja1').fadeIn(1000);"/>
 <!--
 <input type="button" onclick="animar();" value="Agrandar"/>
 <input type="button" onclick="slide();" value="Recoger"/>
 <input type="button" onclick="desplegar();" value="Desplegar"/>
 <input type="button" onclick="reset();" value="reset"/>
 <br/>-->
 
 <div id="caja1" onclick="desaparece1()">
 <p>Indicar con: LE (ley), DE (decreto), RM (resolución ministerial), DI (disposición), </p>
 </div>
</td></tr>




<tr><td><label><br />
N&uacute;mero: </label>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type"text" name="numero" onChange="conMayusculas(this)"/>

<!--  efectos jquery-->
 <input type="button" value="Ayuda" onclick="$('#caja2').fadeIn(1000);"/>
<!-- 
 <input type="button" onclick="animar();" value="Agrandar"/>
 <input type="button" onclick="slide();" value="Recoger"/>
 <input type="button" onclick="desplegar();" value="Desplegar"/>
 <input type="button" onclick="reset();" value="reset"/>-->
 <br/>
 
 <div id="caja2" onclick="desaparece2()">
 <p>Completar hacia el márgen izquierdo con ceros hasta 5 dígitos</p>
 </div>



</td></tr>



	<tr>
		<td>
			<label> <br /> 		P&uacute;blicado en: </label>

    &nbsp;<input type"text" name="publicada" onChange="conMayusculas(this)"  placeholder="Ubicación"/>

 <input type="button" value="Ayuda" onclick="$('#caja3').fadeIn(1000);"/>
 <!--
 <input type="button" onclick="animar();" value="Agrandar"/>
 <input type="button" onclick="slide();" value="Recoger"/>
 <input type="button" onclick="desplegar();" value="Desplegar"/>
 <input type="button" onclick="reset();" value="reset"/>-->
 <br/>
 
 <div id="caja3" onclick="desaparece3()">
 <p>Indicar con: B.O. 12/08/24 (boletin oficial), LEG.EDUC.Nº, HOJA INFORMATIVA Nº </p>
 	</div>

			</td>
					</tr>
	
	<tr>
		<td>
			<label><br /> Autor:</label> 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="autor" title="M.E.C.C y T" onChange="conMayusculas(this)" /></td></tr>

<tr><td><p>&nbsp;</p>
  <p>Fecha:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input type="date" name="fecha" placeholder="12/08/2010"/>
  </p>

 <input type="button" value="Ayuda" onclick="$('#caja4').fadeIn(1000);"/>
 <!--
 <input type="button" onclick="animar();" value="Agrandar"/>
 <input type="button" onclick="slide();" value="Recoger"/>
 <input type="button" onclick="desplegar();" value="Desplegar"/>
 <input type="button" onclick="reset();" value="reset"/>-->
 <br/>
 
 <div id="caja4" onclick="desaparece4()">
 <p>Indicar con DD/MM/AAAA</p>
 </div>

</td></tr>

<tr><td><label><br />
Resumen:</label>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type"text" name="resumen" title="resumen" onChange="conMayusculas(this)"/>


<!--  efectos jquery-->
 <input type="button" value="Ayuda" onclick="$('#caja5').fadeIn(1000);"/>
 <!--
 <input type="button" onclick="animar();" value="Agrandar"/>
 <input type="button" onclick="slide();" value="Recoger"/>
 <input type="button" onclick="desplegar();" value="Desplegar"/>
 <input type="button" onclick="reset();" value="reset"/>-->
 <br/>
 
 <div id="caja5" onclick="desaparece5()">
 <p>Descripción de lo dispuesto en la norma en no mas de 350 caracteres</p>
 </div>




</td></tr>

<tr><td><label><br />
Descriptores:</label>
&nbsp;&nbsp;&nbsp;<input type"tex" name="coleccion" onChange="conMayusculas(this)"/>

 <input type="button" value="Ayuda" onclick="$('#caja6').fadeIn(1000);"/>
 <!--
 <input type="button" onclick="animar();" value="Agrandar"/>
 <input type="button" onclick="slide();" value="Recoger"/>
 <input type="button" onclick="desplegar();" value="Desplegar"/>
 <input type="button" onclick="reset();" value="reset"/>-->
 <br/>
 
 <div id="caja6" onclick="desaparece6()">
 <p><a target="_blank"href="http://www.bnm.me.gov.ar/vocabularios/tesauro/">Ver tesauro</a></p>
 </div>


</td></tr>

<tr><td><label><br />
Modifica A:</label>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type"text" name="modifica" onChange="conMayusculas(this)"/></td></tr>
<tr><td><label><br />
 Modificada <br />
Por: </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type"text" name="modificada_por" onChange="conMayusculas(this)"/></td></tr>
	


<td><br />
    <p>Estado:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
      <label><input type="radio" name="estado" value="VIGENTE" <?php echo $row["estado"]; ?>/>Vigente</label>
      
  <label><input type="radio" name="estado" value="MODIFICADA" <?php echo $row["estado"]; ?>/>Modificada</label>
      
  <label><input type="radio" name="estado" value="DEROGADA" <?php echo $row["estado"]; ?>/>Derogada</label>
  </p>
    <p><br />
    </p></td><!--campos en mysql tabla ENUM 'VIGENTE','MODIFICADA','DEROGADA'-->

<tr><td><label><br />
Descriptor <br />
Geogr&aacute;fico:</label>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type"text" name="geografico" onChange="conMayusculas(this)" placeholder="Chaco"/>
<p>&nbsp; </p></td></tr>
	
<?php
	if(isset($_POST["btoSubir"])){
		$src = $_FILES["documento"]["tmp_name"];
		$dst = "modulos/buscador/documentos/".$_FILES["documento"]["name"];
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

			  <p>Ejemplo de como subir el archivo de modo correcto<br>
			  		RESOLUCION-00000-00.pdf <br>
			  		<br>

			  	 Ejemplo de como no se debe subir el archivo <br>
			  	 RESOLUCIÓN Nº 00000-00

			  </p>

			  </td></tr>";
	}
	?>
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
