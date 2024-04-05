<?php
include('conexion.php');

if (isset($_POST['register'])) {
    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['password']) >= 1) {
        
        $name = trim($_POST['nombre']);
        $email = trim($_POST['email']);
        $password = password_hash(trim($_POST['password']), PASSWORD_DEFAULT);

        // Verificar si el correo electrónico ya está registrado
        $verificarCorreo = $conexion->prepare("SELECT email FROM tb_usuarios WHERE email = ?");
        $verificarCorreo->bind_param("s", $email);
        $verificarCorreo->execute();
        $resultadoVerificacion = $verificarCorreo->get_result();

        if ($resultadoVerificacion->num_rows > 0) {
            echo "El correo electrónico ya está registrado.";
        } else {
            // Insertar el nuevo usuario
            $consulta = $conexion->prepare("INSERT INTO tb_usuarios(nombre, email, password) VALUES (?, ?, ?)");
            $consulta->bind_param("sss", $name, $email, $password);
            if ($consulta->execute()) {
                echo "Escrito correctamente";
            } else {
                echo "Error al insertar el usuario";
            }
            $consulta->close();
        }
        $verificarCorreo->close();
    } else {
        echo "Todos los campos son obligatorios.";
    }
}
?>
