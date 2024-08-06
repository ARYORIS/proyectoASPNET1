<?php
session_start();

include 'conexion_be.php';


// Verifica si los datos del formulario están definidos
if (isset($_POST['correo_electronico']) && isset($_POST['contrasena'])) {
    $correo_electronico = $_POST['correo_electronico'];
    $contrasena = $_POST['contrasena'];

    // Asegúrate de usar la variable de conexión correcta
    $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo_electronico = '$correo_electronico'");
    $fila = mysqli_fetch_assoc($validar_login);
$contrasena_hash    = $fila['contrasena'];
    if (password_verify($contrasena, $contrasena_hash)) {
        $_SESSION['usuario'] = $correo_electronico;

         
        // Ahora puedes acceder a las propiedades del resultado
        $rol = $fila['rol']; // Asumiendo que hay una columna 'id'
     
        if ($rol == 'admin') {
            header("location: ../admin.php");
        } else 
        header("location: ../main.php");
               exit;
    } else {
        
    
    
    }

    } 

?>
