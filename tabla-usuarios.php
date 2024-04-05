<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuarios</title>
    <link rel="stylesheet" type="text/css" href="public/css/estilo.css">
</head>

<body>

    <!-- Inicio del menú de navegación -->
    <div class="menu-navegacion">
        <a href="login-usuarios.php">Login</a>
        <a href="registro-usuarios.php">Registro</a>
        <a href="tabla-usuarios.php">Tabla de usuarios</a>
    </div>
    <!-- Fin del menú de navegación -->
<?php
include('public/php/conexion.php'); // Asegúrate de tener la conexión a la base de datos
$consulta = "SELECT id, nombre, email FROM tb_usuarios"; // Ajusta los nombres de columna según tu base de datos
$resultado = $conexion->query($consulta);
?>
    <div class="contenedor-tabla">
        <h2>Usuarios Registrados</h2>
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody id="tabla-usuarios">
                <!-- Bloque PHP para generar filas de la tabla dinámicamente -->
                <?php while ($usuario = $resultado->fetch_assoc()) : ?>
                    <tr>
                        <td><?php echo htmlspecialchars($usuario['nombre'], ENT_QUOTES, 'UTF-8'); ?></td>
                        <td><?php echo htmlspecialchars($usuario['email'], ENT_QUOTES, 'UTF-8'); ?></td>
                        <td>
                            <!-- Asume que tienes un archivo editar-usuario.php y eliminar-usuario.php para manejar estas acciones -->
                            <a href="editar-usuario.php?id=<?php echo $usuario['id']; ?>" class="btn-editar">Editar</a>
                            <!-- Para eliminar, considera implementar una confirmación antes de proceder -->
                            <a href="eliminar-usuario.php?id=<?php echo $usuario['id']; ?>" class="btn-eliminar" onclick="return confirm('¿Estás seguro que deseas eliminar este usuario?');">Eliminar</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

</body>
</html>