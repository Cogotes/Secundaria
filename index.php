<?php
	session_start();
	
	define("MODULE_PATH","modulos/");
	define("TEMPLATE_PATH","view/");
	
	//Agregando la capa de seguridad
	require_once dirname(__FILE__).'/'.MODULE_PATH.'security/security.php';
	//test de segurdidad
	if (!$_SESSION["loginTrue"]):
	$sec = new Auditor();
	if($sec->test()):
		$sec->chance("active");
		exit();
	endif;
	endif;

	require_once dirname(__FILE__).'/'.TEMPLATE_PATH.'header.php';
	require_once dirname(__FILE__).'/'.TEMPLATE_PATH.'menu.php';
	
	if(!isset($_GET["mod"])) {
		$mod = "inicio";
		$acc = "inicio";
	}else {	
	switch($_GET["mod"]){
		case "buscador":
			$mod = "buscador";
			$acc = $_GET['acc'];
			break;
		case "login":
			$mod = "login";
			$acc = $_GET['acc'];
			break;
		case "login":
			$mod = "comprobar";
			$acc = $_GET['acc'];
			break;
		
		case "registrate":
			$mod = "registrate";
			$acc = $_GET['acc'];
			break;
		


		case "login":
			$mod = "logout";
			$acc = $_GET['acc'];
			break;
		case "cargar":
			$mod = "cargar";
			$acc = $_GET['acc'];
			break;
				
		case "nosotros":
			$mod = "nosotros";
			$acc = $_GET['acc'];
			break;
		
		default:
			$mod = "inicio";
			$acc = "inicio";
		}
	}
	
	require_once dirname(__FILE__).'/'.MODULE_PATH.$mod.'/'.$acc.'.php';
	//require_once dirname(__FILE__).'/'.TEMPLATE_PATH.'foot.php';
?>
