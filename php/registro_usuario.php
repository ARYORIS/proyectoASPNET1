<?php
require 'conexion_be.php'; // Ajusta la ruta según la ubicación real

// Obtener datos del formulario
$nombre_completo = $_POST['nombre_completo'];
$correo_electronico = $_POST['correo_electronico'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

// Encriptar la contraseña
$contrasena_hash = password_hash($contrasena, PASSWORD_BCRYPT);
try {
    $query = "INSERT INTO usuarios (nombre_completo, correo_electronico, usuario, contrasena, rol) VALUES (?, ?, ?, ?, 'user')";
$stmt = $conexion->prepare($query);

// Verificar si la preparación de la declaración fue exitosa
if ($stmt === false) {
    die('Error en la preparación de la consulta: ' . htmlspecialchars($conexion->error));
}

// Asignar los valores a los parámetros
//$stmt->bind_param("ssss", $nombre_completo, $correo_electronico, $usuario, $contrasena_hash);


// Ejecutar la declaración
if ($stmt->execute()) {
    header('Location: ../index.php');
    exit();
} 

// Cerrar la declaración
$stmt->close();
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>


