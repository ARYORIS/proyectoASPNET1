<?php
session_start();


// Contenido de la página admin.php aquí
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="assets/CSS/admin.css">
</head>
<body>
    <h1>Bienvenido, Administrador</h1>
    <div class="section">
        <h2>Ver el Registro de Usuarios</h2>
        <a href="usuarios_registrados.php" class="section-link">Ver Usuarios</a>
        <h2>Ver el Registro de Productos</h2>
        <a href="productos.php" class="section-link">Ver Productos</a>
        <div class="carousel">
            <!-- Los elementos se agregarán dinámicamente aquí -->
        </div>
    </div>
    <script src="assets/JS/admin.js"></script>
</body>
</html>
