<?php
$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = "loginbd";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtener datos del formulario
    $nombre = $conn->real_escape_string($_POST['nombre']);
    $talla = (int)$_POST['talla'];
    $descripcion = $conn->real_escape_string($_POST['descripcion']);
    $precio = (float)$_POST['precio'];
    $categoria = $conn->real_escape_string($_POST['categoria']);

    // Insertar datos en la base de datos
    $sql = "INSERT INTO zapatos (nombre, talla, descripcion, precio, categoria)
            VALUES ('$nombre', $talla, '$descripcion', $precio, '$categoria')";

    if ($conn->query($sql) === TRUE) {
        echo "Nuevo zapato agregado exitosamente";
        header("Location: hombres.php"); // Redirigir después de agregar
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Zapato</title>
</head>
<body>
    <h1>Agregar Nuevo Zapato</h1>
    <form action="agregar_zapato.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>
        <label for="talla">Talla:</label>
        <input type="number" id="talla" name="talla" required><br><br>
        <label for="descripcion">Descripción:</label>
        <textarea id="descripcion" name="descripcion"></textarea><br><br>
        <label for="precio">Precio:</label>
        <input type="text" id="precio" name="precio" required><br><br>
        <label for="categoria">Categoría:</label>
        <select id="categoria" name="categoria" required>
            <option value="hombre">Hombre</option>
            <option value="mujer">Mujer</option>
        </select><br><br>
        <input type="submit" value="Agregar Zapato">
    </form>
    <a href="hombres.php" class="back-button">Cancelar</a>
    <a href="todos.php" class="back-button">Añadir al mismo pedido</a>
</body>
</html>
