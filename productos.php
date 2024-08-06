<?php
session_start();

// Conexión a la base de datos
$conexion = new mysqli('localhost', 'root', 'mysql', 'loginbd'); // Cambia las credenciales aquí

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

// Obtener todos los productos
$resultado = $conexion->query("SELECT * FROM products");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos Registrados</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
        }
        h1 {
            text-align: center;
            color: #4CAF50;
        }
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        a {
            text-decoration: none;
            color: #4CAF50;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>Productos Registrados</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Categoría</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($fila = $resultado->fetch_assoc()): ?>
                <tr>
                    <td><?php echo htmlspecialchars($fila['id']); ?></td>
                    <td><?php echo htmlspecialchars($fila['nombre']); ?></td>
                    <td><?php echo htmlspecialchars($fila['descripcion']); ?></td>
                    <td><?php echo htmlspecialchars($fila['precio']); ?></td>
                    <td><?php echo htmlspecialchars($fila['categoria']); ?></td>
                    <td>
                        <a href="producto_actualizar.php?id=<?php echo htmlspecialchars($fila['id']); ?>">Actualizar</a>
                        <a href="productos.php?eliminar=<?php echo htmlspecialchars($fila['id']); ?>" onclick="return confirm('¿Estás seguro de eliminar este producto?');">Eliminar</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</body>
</html>

<?php
// Eliminar producto
if (isset($_GET['eliminar'])) {
    $id = $_GET['eliminar'];

    $stmt = $conexion->prepare("DELETE FROM products WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();

    // Redirigir para evitar reenvío de formulario
    header('Location: productos.php');
    exit();
}

$conexion->close();
?>

