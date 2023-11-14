<?php
//Conexión a la base de datos
include ('../bd/conexion.php');
include('../scripts/head.php');

$query = "SELECT * FROM cliente WHERE id_cliente =" . $_GET['id'];
$resultado = $conexion->query($query);

if ($resultado->num_rows > 0) {
    $fila = $resultado->fetch_assoc();
    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Actualizar Cliente</title>
        <!-- Estilos de Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    </head>

    <body class="container mt-4">
        <h3>ACTUALIZAR CLIENTE</h3>
        <form action="op_actualizar_cliente.php" method="post">
            <input type="hidden" name="id_cliente" value="<?php echo $fila['id_cliente'] ?>">

            <div class="form-group">
                <label for="nombre">Actualizar Nombre</label>
                <input type="text" class="form-control" name="nombre" value="<?php echo $fila['nombre'] ?>">
            </div>

            <div class="form-group">
                <label for="direccion">Actualizar Dirección</label>
                <input type="text" class="form-control" name="direccion" value="<?php echo $fila['direccion'] ?>">
            </div>

            <div class="form-group">
                <label for="telefono">Actualizar Teléfono</label>
                <input type="text" class="form-control" name="telefono" value="<?php echo $fila['telefono'] ?>">
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Actualizar">
                <a href="crearcliente.php" class="btn btn-success"><i class="fas fa-plus"></i> Crear Cliente</a>
            </div>
        </form>
    </body>

    </html>

<?php } ?>
