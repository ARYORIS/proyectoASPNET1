<?php
session_start();

// Conectar a la base de datos
$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = "loginbd";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $talla = $_POST['talla'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $categoria = $_POST['categoria'];

    // Validar los datos
    if (empty($nombre) || empty($talla) || empty($precio) || empty($categoria)) {
        echo "Todos los campos son obligatorios.";
        exit();
    }

    // Preparar la consulta SQL
    $sql = "INSERT INTO zapatos (nombre, talla, descripcion, precio, categoria) VALUES (?, ?, ?, ?, ?)";

    // Usar una declaración preparada para evitar inyecciones SQL
    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
        die("Error al preparar la consulta: " . $conn->error);
    }
    
    $stmt->bind_param("sisss", $nombre, $talla, $descripcion, $precio, $categoria);

    if ($stmt->execute()) {
        echo "Nuevo zapato agregado exitosamente";
        // Redirigir a la página principal o a una página de éxito
        header("Location: main.php");
        exit();
    } else {
        echo "Error al ejecutar la consulta: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
