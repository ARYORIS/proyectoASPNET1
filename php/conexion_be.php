<?php
$host = "localhost";
$user = "root";
$password = "mysql";
$database = "loginbd";

$conexion = new mysqli($host, $user, $password, $database);

// Verifica si la conexión fue exitosa
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}
?>
