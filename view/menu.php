
<div id="menu">

		<form action="index.php" action="get" name="formBuscar" id="formBuscar">
        <input type="hidden" name="mod" value="buscador">
        <input type="hidden" name="acc" value="buscador_titular">
        <input type="search" name="q" id="buscar" size="10" type="text"  title="busqueda por numero">
        <a href="javascript:void(0)" onClick="document.formBuscar.submit()" >Buscar</a> 
</form>

<!-- 
<form action="index.php" action="get" name="Buscar" id="Buscar">
        <input type="hidden" name="mod" value="buscador">
        <input type="hidden" name="acc" value="buscador_titular">
        <input type="search" name="q" id="buscar" size="10" type="text"  title="busqueda por numero">
        <a href="javascript:void(0)" onClick="document.formBuscar.submit()" >Busqueda Titulares</a> 
</form> -->

<ul id="button">


<li><a href="index.php">Inicio</a></li>
<hr>
<!-- <li><a href="http://dirdocumentacion.com.ar/secundaria/modulos/buscador/documentos/ORIENTADOR0.pdf" target="_blanck">Orientador</a></li> -->
<!-- <hr> -->
<li><a href="index.php?mod=nosotros&acc=nosotros">Contacto</a></li>
<!--
<hr>
<li><a href="inscripcion/index_datos.html">Datos personales</a></li>

<hr>
<li><a href="inscripcion/index_esc1.html">Cargos</a></li>
-->



<!-- <hr>
	 // <?php// if($_SESSION['permisos']==1): 	?>

<li>	<a href="index.php?mod=buscador&acc=cargar">cargar</a></li>
<hr>
<li>	<a href="index.php?mod=buscador&acc=buscadorEditar">editar</a></li>
<hr />
<li>	<a href="index.php?mod=buscador&acc=cargar_hoja">cargar hoja</a></li>
<hr>
<li>    <a href="index.php?mod=buscador&acc=datos_docente">cargar Datos docente</a></li>
<hr>

  <li><a href="index.php?mod=login&acc=logout">Salir</a></li>


	// <?php// else:; ?>
 <li><a href="index.php?mod=login&acc=loguear" >Iniciar Sesi&oacute;n</a></li>
<?php// endif; ?>
<hr>
 -->	





    <!-- **************conexion a hoja informativa ***************-->
<!-- 
<?php 
// require_once"config/bbdd1.php";?>
 <?php
  // $consulta1 = "SELECT * FROM datos_docente ORDER BY id DESC LIMIT 1" ; 
 // $res1 = mysql_query($consulta1); ?>
 <?php 
 // while($row1=mysql_fetch_array($res1)): ?>    
 <a href="modulos/buscador/documentos/documento/<?php 
 // echo $row1['documento']; ?>" target="_blank"> Datos del Docente  </a>  -->
<!--  <?php
  // endwhile; ?>
  -->
 <!--**********************************************************-->


<!-- <hr /> -->
<!-- **************conexion a hoja informativa ***************-->
<!-- 
<?php
 // require_once"config/bbdd1.php";?>
 <?php 
 // $consulta1 = "SELECT * FROM hoja_secu ORDER BY id DESC LIMIT 1" ; 
 // $res1 = mysql_query($consulta1); ?>
 <?php 
 // while($row1=mysql_fetch_array($res1)): ?>    
 <a href="modulos/buscador/documentos/documento/<?php
  // echo $row1['documento']; ?>" target="_blank"> Hoja Informativa  </a> 
 // <?php 
 // endwhile; ?>
 <hr> -->
 <!--**********************************************************-->


<li><a href="index.php?mod=buscador&acc=permutas">Permutas</a></li>  

<li><a href="index.php?mod=login&acc=loguear_titular">Mis Datos</a></li>
<!-- 
<?php//   if($_SESSION['permisos']==3):   ?>

 --><!-- <li><a href="index.php?mod=buscador&acc=buscador_permuta">Solicitar</a></li> -->
<!-- <li><a href="index.php?mod=buscador&acc=detalle_titular&LEGAJO=<?php// echo $_POST['LEGAJO']; ?>">Perfil</a></li> -->
<!-- 
<li><a href="index.php?mod=login&acc=logout_titular">Salir</a></li>

<?php// else:; ?>

<?php// endif; ?>

 -->	
</ul>

	</div>
