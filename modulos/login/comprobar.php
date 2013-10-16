<?php

if($_SESSION["loginTrue"]){
	echo "Bienvenido Administrador..";
	//NO HAGO NADA POR QUE ESTOY LOGUEADO

}else{
?>
	<script type="text/javascript" language="javascript"> 
			alert ("Debes iniciar sessión");
			location.href ='index.php?mod=login&acc=login';<!--// probar si anda esto -->
	</script>
<?php
	echo "NO ESTAS Login ... ";
	session_destroy();
	die;
}
?>
