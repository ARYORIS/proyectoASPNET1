<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login y Registro</title>
    <link rel="stylesheet" href="assets/CSS/estilos.css">
</head>
<body>
<main>
    <div class="contenedor__todo">
        <div class="caja__trasera">
            <div class="caja__trasera-login">
                <h3>¿Ya tienes una cuenta?</h3>
                <p>Inicia sesión para entrar en la página</p>
                <button id="btn__iniciar-sesion">Iniciar Sesión</button>
            </div>
            <div class="caja__trasera-registro">
                <h3>¿Aún no tienes una cuenta?</h3>
                <p>Regístrate para que puedas iniciar sesión</p>
                <button id="btn__Registrarse">Registrarse</button>
            </div>
        </div>

        <!-- FORMULARIO DE LOGIN -->
        <div class="contenedor__login-register">
        <form action="php/login_usuario.php" method="POST" class="formulario__login">
    <h2>Iniciar Sesión</h2>
    <input type="text" placeholder="Correo Electrónico" name="correo_electronico">
    <input type="password" placeholder="Contraseña" name="contrasena">
    <button type="submit">Entrar</button>
    <a href="#">Olvidé mi Contraseña</a>
</form>


            <!-- FORMULARIO DE REGISTRO -->
            <form action="php/registro_usuario.php" method="POST" class="formulario__register">
                <h2>Registrarse</h2>
                <input type="text" placeholder="Nombre Completo" name="nombre_completo">
                <input type="text" placeholder="Correo Electrónico" name="correo_electronico">
                <input type="text" placeholder="Usuario" name="usuario">
                <input type="password" placeholder="Contraseña" name="contrasena">
                <button type="submit">Registrarse</button>
            </form>
        </div>
    </div>
</main>
<script src="assets/js/script.js"></script>
</body>
</html>
