<?php
session_start();
include('conexion.php');

$email = $_POST['email']; // Cambiado de 'email' a 'username' para coincidir con el formulario
$password = $_POST['password'];

$consulta = $conexion->prepare("SELECT * FROM tb_usuarios WHERE email = ?");
$consulta->bind_param("s", $email);
$consulta->execute();
$resultado = $consulta->get_result();

if ($fila = $resultado->fetch_assoc()) {
    if (password_verify($password, $fila['password'])) {
        $_SESSION['usuario_id'] = $fila['id'];
        $_SESSION['email'] = $fila['email']; // Asegúrate de que esta columna existe en tu base de datos

        header('Location: dashboard.php');
        exit();
    } else {
        echo "La contraseña no es válida.";
    }
} else {
    echo "No se encontró una cuenta con ese email.";
}

$consulta->close();
$conexion->close();
?>
