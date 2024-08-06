<?php
session_start();

// Conexión a la base de datos
$host = 'localhost';
$usuario = 'root'; // Cambia esto a tu nombre de usuario de MySQL
$contraseña = 'mysql'; // Cambia esto a tu contraseña de MySQL
$base_datos = 'loginbd';

$conexion = new mysqli($host, $usuario, $contraseña, $base_datos);

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

// Eliminar usuario
if (isset($_GET['eliminar'])) {
    $id = $_GET['eliminar'];

    $stmt = $conexion->prepare("DELETE FROM usuarios WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();

    // Redirigir para evitar reenvío de formulario
    header('Location: usuarios_registrados.php');
    exit();
}

// Obtener todos los usuarios
$resultado = $conexion->query("SELECT * FROM usuarios");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios Registrados</title>
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
    <h1>Usuarios Registrados</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre Completo</th>
                <th>Correo Electrónico</th>
                <th>Usuario</th>
                <th>Rol</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($fila = $resultado->fetch_assoc()): ?>
                <tr>
                    <td><?php echo htmlspecialchars($fila['id']); ?></td>
                    <td><?php echo htmlspecialchars($fila['nombre_completo']); ?></td>
                    <td><?php echo htmlspecialchars($fila['correo_electronico']); ?></td>
                    <td><?php echo htmlspecialchars($fila['usuario']); ?></td>
                    <td><?php echo htmlspecialchars($fila['rol']); ?></td>
                    <td>
                        <a href="admin_actualizar.php?id=<?php echo htmlspecialchars($fila['id']); ?>">Actualizar</a>
                        <a href="usuarios_registrados.php?eliminar=<?php echo htmlspecialchars($fila['id']); ?>" onclick="return confirm('¿Estás seguro de eliminar este usuario?');">Eliminar</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</body>
</html>

<?php
$conexion->close();
?>

