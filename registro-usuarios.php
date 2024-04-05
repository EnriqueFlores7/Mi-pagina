<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    <link rel="stylesheet" type="text/css" href="public/css/estilo.css">
</head>
<body>
<?php
    include('public/php/conexion.php');
?>
<!-- Inicio del menú de navegación -->
<div class="menu-navegacion">
    <a href="login-usuarios.php">Login</a>
    <a href="registro-usuarios.php">Registro</a>
    <a href="tabla-usuarios.php">Tabla de usuarios</a>
</div>
<!-- Fin del menú de navegación -->


<div class="formulario-registro">
    <h2>Registro de Usuario</h2>
    <form action="" method="POST">
        <?php
    if (isset($_POST['error1'])) {
        echo'El usuario ya existe';
    }
        ?>
        <div class="campo-formulario">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" required>
        </div>
        <div class="campo-formulario">
            <label for="email">Email:</label>
            <input type="email" name="email" required>
        </div>
        <div class="campo-formulario">
            <label for="password">Contraseña:</label>
            <input type="password" name="password" required>
        </div>
        <div class="campo-formulario">
            <button type="submit" name="register">Registrar</button>
        </div>
    </form>
    <?php 
        include('public/php/alta-usuarios.php');
    ?>
</div>

</body>
</html>