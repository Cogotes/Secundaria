<?php
require_once "config/bbdd2.php";

if($_SESSION["ANDA"]=="SI"){

$consulta2 = "select * from usuarios 
					where 
					id like '%".$_GET['q']."%' OR
					apellido like '%".$_GET['q']."%' OR
					nombre like '%".$_GET['q']."%'
					";

$query2 = mysql_query($consulta2);
	
?>
	
				
<?php 
	 
		while($row2=mysql_fetch_array($query2)):
		$impreso++; 

?>			
			
			 <?php echo htmlentities(substr($row2['apellido'],0,250),null,"UTF-8"); ?> 
				
			 <?php echo htmlentities(substr($row2['nombre'],0,250),null,"UTF-8"); ?> 
<?php
 endwhile;

}else{
?>
	<script type="text/javascript" language="javascript"> 
			alert ("Debes iniciar sessión");
			location.href ='index.php?mod=login&acc=login';<!-- probar si anda esto -->
	</script>
<?php
	echo "NO ESTAS Login ... ";
	session_destroy();
	die;
}
?>
