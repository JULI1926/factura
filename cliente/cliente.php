<?php
//Conexion a la BD
include('../bd/conexion.php');

include('../scripts/head.php');

//Consulta SQL para obtener todos los clientes
$query = "SELECT * FROM cliente";
$resultado = $conexion->query($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
</head>

<body>
    <div class="container mt-4">
        <h3>CLIENTES</h3>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>Nombre</th>
                    <th>Direccion</th>
                    <th>Telefono</th>
                    <th>Acciones</th>
                    <a href='crear_cliente.php' class='btn btn-success'>
                        <i class="fas fa-plus"></i> Añadir Cliente
                    </a>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($fila = $resultado->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $fila["nombre"] . "</td>";
                    echo "<td>" . $fila["direccion"] . "</td>";
                    echo "<td>" . $fila["telefono"] . "</td>";
                    echo "<td><a href='actualizar_cliente.php?id=" . $fila["id_cliente"] . "' class='btn btn-primary'>Actualizar</a> <a href='op_eliminar_cliente.php?id=" . $fila["id_cliente"] . "' class='btn btn-danger'>Eliminar</a></td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
        <!-- Siempre visible: Opción para añadir cliente -->
    </div>
</body>

</html>