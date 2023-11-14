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
        echo $row['contrasena'];
        if (password_verify($contrasena, $row['contrasena'])) {
            header('location: ../index.php');
            exit();
        } else {
            echo '<script>alert("Contraseña incorrecta y Usuario no encontrado");</script>';
        }
    } else {
        echo '<script>alert("Usuario no encontrado");</script>';
    }
}
$conexion->close();
?>