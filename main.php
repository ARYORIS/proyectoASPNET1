<?php
session_start();
/*
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>
    <link rel="stylesheet" href="assets/CSS/estilos.css">
    <style>
        /* Estilos específicos para la página principal */
        body {
            background: #f4f4f4;
            font-family: Arial, sans-serif;
        }

        .main-content {
            max-width: 1200px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            animation: fadeIn 1s ease-in-out;
        }

        .section {
            margin-bottom: 40px;
        }

        .section h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #4a4a4a; /* Gris oscuro */
            font-size: 28px;
            font-weight: 600;
            text-transform: uppercase;
        }

        .carousel {
            display: flex;
            overflow-x: auto;
            gap: 10px;
            padding: 10px 0;
            scroll-behavior: smooth;
            -webkit-overflow-scrolling: touch;
        }

        .carousel::-webkit-scrollbar {
            display: none;
        }

        .carousel div {
            flex: 0 0 auto;
            width: 200px;
            height: 150px;
            background: #ddd; /* Gris claro */
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }

        .carousel div:hover {
            transform: scale(1.05);
        }

        .add-to-cart, .discounts {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: background 0.3s, transform 0.3s;
        }

        .add-to-cart:hover, .discounts:hover {
            background: #f1f1f1; /* Gris claro */
            transform: translateY(-5px);
        }

        .add-to-cart h3, .discounts h3 {
            margin-bottom: 15px;
            color: #333; /* Gris oscuro */
            font-size: 24px;
            font-weight: 500;
        }

        .add-to-cart button, .discounts button {
            padding: 10px 20px;
            border: none;
            background-color: #007BFF; /* Azul */
            color: white;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .add-to-cart button:hover, .discounts button:hover {
            background-color: #0056b3; /* Azul más oscuro */
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @media screen and (max-width: 768px) {
            .carousel div {
                width: 150px;
                height: 100px;
            }

            .section h2 {
                font-size: 24px;
            }

            .add-to-cart h3, .discounts h3 {
                font-size: 20px;
            }
        }

        /* Estilo para el botón de cerrar sesión */
        .logout-button {
            display: block;
            margin: 20px auto;
            padding: 10px 20px;
            border: none;
            background-color: #4b0082; /* Morado oscuro */
            color: white;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            text-align: center;
            transition: background-color 0.3s;
        }

        .logout-button:hover {
            background-color: #6a0dad; /* Morado más claro */
        }

        /* Estilos para los enlaces de las secciones */
        .section a {
            display: block;
            text-align: center;
            padding: 10px;
            background-color: #007BFF; /* Azul */
            color: white;
            font-size: 16px;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .section a:hover {
            background-color: #0056b3; /* Azul más oscuro */
        }
    </style>
</head>
<body>
    <div class="main-content">
        <h1>Bienvenido a Shoes, tu tienda de zapatos!</h1>
        
        <!-- Carrusel de Zapatos de Hombre y Niño -->
        <div class="section">
            <h2>Zapatos de Hombre y Niño</h2>
            <a href="hombres.php" class="section-link">Ver Zapatos de Hombre y Niño</a>
            <div class="carousel">
                <div></div>
                <!-- Agrega más elementos según sea necesario -->
            </div>
        </div>
        
        <!-- Carrusel de Zapatos y Sandalias para Mujeres y Niñas -->
        <div class="section">
            <h2>Zapatos y Sandalias para Mujeres y Niñas</h2>
            <a href="mujeres.php" class="section-link">Ver Zapatos y Sandalias para Mujeres y Niñas</a>
            <div class="carousel">
                <div></div>
                <!-- Agrega más elementos según sea necesario -->
            </div>
        </div>

        <!-- Carrusel de Todos los Géneros y Tipos de Zapatos -->
        <div class="section">
            <h2>Todos los Géneros y Tipos de Zapatos</h2>
            <a href="todo.php" class="section-link">Ver Todos los Géneros y Tipos de Zapatos</a>
            <div class="carousel">
                <div></div>
            
                <!-- Agrega más elementos según sea necesario -->
            </div>
        </div>

        <!-- Área de Agregar al Carrito -->
        <div class="section add-to-cart">
            <h3>Agregar al Carrito</h3>
            <!-- Aquí puedes agregar un formulario o funcionalidad para agregar al carrito -->
            <button>Ver Carrito</button>
        </div>

        <!-- Sección de Anuncios de Descuentos -->
        <div class="section discounts">
            <h3>Anuncios de Descuentos</h3>
            <p>Aprovecha nuestras ofertas y descuentos especiales.</p>
            <!-- Aquí puedes agregar información adicional sobre descuentos -->
            <button>Ver Ofertas</button>
        </div>
        
        <!-- Botón de Cerrar Sesión -->
        <a href="loguot.php" class="logout-button">Cerrar Sesión</a>
    </div>
</body>
</html>
