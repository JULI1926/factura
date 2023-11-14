<?php 
session_start();
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
require 'bd/conexion.php';
include ('scripts/head.php');   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factura</title>
    
    <!-- Agrega los enlaces CDN de Bootstrap -->
</head>
<body>
    <div class="container">
        <h3 class="mt-3">Software de Factura</h3>
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="cliente/cliente.php">CLIENTES</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="producto/producto.php">PRODUCTOS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="factura/factura.php">FACTURA</a>
            </li>
        </ul>
    </div>

    <!-- Agrega los scripts de Bootstrap (jQuery y Popper.js) -->
    
</body>
</html>
