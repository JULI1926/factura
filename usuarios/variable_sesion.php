<?php
include ('../bd/conexion.php');
if (!isset($_SESSION['usuario'])) {
	echo '
			<script>
				window.location = "usuarios/formulario_login.php";
			</script>	
		';
	//header("location: formulario_login.php");
	session_destroy();
	die();
}    
?>