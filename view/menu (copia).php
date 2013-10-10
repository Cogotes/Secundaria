

<div id="menu">

		<form action="index.php" action="get" name="formBuscar" id="formBuscar">
        <input type="hidden" name="mod" value="buscador">
        <input type="hidden" name="acc" value="buscador">
        <input type="search" name="q" id="buscar" size="10" type="text"  title="busqueda por numero">
        <a href="javascript:void(0)" onClick="document.formBuscar.submit()" >Buscar</a> 
</form>


<ul id="button">
<li><a href="index.php">Inicio</a></li>
<hr>
<li><a href="index.php?mod=nosotros&acc=nosotros">Contacto</a></li>

<hr>
	<?php 	if($_SESSION['permisos']==1): 	?>

<li>	<a href="index.php?mod=buscador&acc=cargar">cargar</a></li>
<hr>
<li>	<a href="index.php?mod=buscador&acc=buscadorEditar">editar</a></li>
<hr />
<li>	<a href="index.php?mod=buscador&acc=cargar_hoja">cargar hoja</a></li>
<hr>

  <li><a href="index.php?mod=login&acc=logout">Salir</a></li>


	<?php else:; ?>
 <li><a href="index.php?mod=login&acc=loguear" >Iniciar Sesi&oacute;n</a></li>
<?php endif; ?>
<hr>
	<li><a href="mas/pdf/DATOS DEL DOCENTE  INTERINATOS Y SUPLENCIAS 2013.pdf" target="_blank">Datos del Docente</a></li>

<hr />

<li><a href="mas/pdf/hoja informaiva 1.pdf" target="_blank">Hoja Informativa 1</a></li>
	
</ul>

	</div>
