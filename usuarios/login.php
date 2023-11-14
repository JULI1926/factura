<?php
require '../bd/conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $contrasena = $_POST['contrasena'];

    $query = "SELECT * FROM usuarios WHERE email='$email'";
    $result = mysqli_query($conexion, $query);

    if (mysqli_num_rows($result) > 0) {
        $_SESSION['usuario'] = $email;
        $row = mysqli_fetch_assoc($result);

        if (password_verify($contrasena, $row['contrasena'])) {
            header('location: ../index.php');
            exit();
        } else {
            echo '<script>alert("Contraseña incorrecta"); window.location = "../usuarios/formulario_registro.php";</script>';
        }
    } else {
        echo '<script>alert("Usuario no encontrado"); window.location = "../usuarios/formulario_registro.php";</script>';
    }
}

$conexion->close();
?>
