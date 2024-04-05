<?php
session_start();

if (!isset($_SESSION['usuario_id'])) {
    // Si el usuario no está logueado, redirigir a la página de login.
    header('Location: login.php');
    exit();
}

// Acceder solo a las claves que existen
echo "<h1>Bienvenido al Dashboard, " . htmlspecialchars($_SESSION['email']) . "!</h1>";
echo "<a href='logout.php'>Cerrar Sesión</a>";
?>
