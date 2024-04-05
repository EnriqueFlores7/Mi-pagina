<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="public/css/login.css">
</head>
<body>

<!-- Inicio del menú de navegación -->
<div class="menu-navegacion">
    <a href="login-usuarios.php">Login</a>
    <a href="registro-usuarios.php">Registro</a>
    <a href="tabla-usuarios.php">Tabla de usuarios</a>
</div>
<!-- Fin del menú de navegación -->

<div class="login-container">
    <form action="public/php/login.php" method="POST">
        <div class="form-group">
            <label for="username">Usuario:</label>
            <input type="text" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <button type="submit" name="login_btn">Iniciar Sesión</button>
    </form>
</div>

</body>
</html>
