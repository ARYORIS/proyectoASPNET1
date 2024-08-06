<?php
session_start();

/*
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}

*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zapatos y Sandalias para Mujeres y Niñas</title>
    <link rel="stylesheet" href="assets/CSS/estilos.css">
    <style>
        /* Estilos aquí */
        .main-content {
            max-width: 1200px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .carousel-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            padding: 10px 0;
        }

        .product {
            flex: 0 0 calc(33.333% - 20px);
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            text-align: center;
            position: relative;
            margin-bottom: 20px;
        }

        .product img {
            width: 100%;
            height: auto;
        }

        .product-info {
            padding: 15px;
        }

        .product-info h3 {
            margin: 10px 0;
            color: #333;
            font-size: 20px;
        }

        .product-info p {
            margin: 5px 0;
            color: #666;
        }

        .product-info .price {
            color: #007BFF;
            font-size: 18px;
            font-weight: bold;
        }

        .button-container {
            margin: 15px 0;
        }

        .button-container a {
            margin: 5px;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            color: white;
            text-align: center;
            text-decoration: none;
            font-size: 16px;
        }

        .add-button {
            background-color: #4CAF50;
        }

        .cancel-button {
            background-color: #f44336;
        }

        .add-button:hover {
            background-color: #45a049;
        }

        .cancel-button:hover {
            background-color: #e53935;
        }

        .back-button {
            display: block;
            margin: 20px auto;
            padding: 10px 20px;
            border: none;
            background-color: #4b0082;
            color: white;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .back-button:hover {
            background-color: #6a0dad;
        }
    </style>
</head>
<body>
    <div class="main-content">
        <h1>Zapatos y Sandalias para Mujeres y Niñas</h1>

        <!-- Bloque de Tennis -->
        <h2>Tennis</h2>
        <div class="carousel-container">
            <!-- Producto 1 -->
            <div class="product">
                <img src="assets/images/tennisRosados.jpg" alt="Tennis 1">
                <div class="product-info">
                    <h3>Tennis Rosados</h3>
                    <p>Talla: 36</p>
                    <p>Tennis elegantes y cómodos.</p>
                    <p class="price">$45.00</p>
                </div>
                <div class="button-container">
                    <a href="agregar_zapato.php?categoria=tennis&nombre=TennisRosados&talla=36&descripcion=Tennis elegantes y cómodos&precio=45&imagen=tennisRosados.jpg" class="add-button">Agregar</a>
                    <a href="eliminar_zapato.php?categoria=tennis&nombre=TennisRosados" class="cancel-button">Cancelar</a>
                </div>
            </div>
            <!-- Producto 2 -->
            <div class="product">
                <img src="assets/images/tennisnegros.jpeg" alt="Tennis 2">
                <div class="product-info">
                    <h3>Tennis Negros</h3>
                    <p>Talla: 37</p>
                    <p>Tennis deportivos para uso diario.</p>
                    <p class="price">$50.00</p>
                </div>
                <div class="button-container">
                    <a href="agregar_zapato.php?categoria=tennis&nombre=TennisNegros&talla=37&descripcion=Tennis deportivos para uso diario&precio=50&imagen=tennisNegros.jpg" class="add-button">Agregar</a>
                    <a href="eliminar_zapato.php?categoria=tennis&nombre=TennisNegros" class="cancel-button">Cancelar</a>
                </div>
            </div>
            <!-- Producto 3 -->
            <div class="product">
                <img src="assets/images/tennisazules.jpeg" alt="Tennis 3">
                <div class="product-info">
                    <h3>Tennis Azul</h3>
                    <p>Talla: 38</p>
                    <p>Tennis modernos y deportivos.</p>
                    <p class="price">$55.00</p>
                </div>
                <div class="button-container">
                    <a href="agregar_zapato.php?categoria=tennis&nombre=TennisAzul&talla=38&descripcion=Tennis modernos y deportivos&precio=55&imagen=tennisAzul.jpg" class="add-button">Agregar</a>
                    <a href="eliminar_zapato.php?categoria=tennis&nombre=TennisAzul" class="cancel-button">Cancelar</a>
                </div>
            </div>
        </div>

        <!-- Bloque de Zapatillas -->
        <h2>Tacones</h2>
        <div class="carousel-container">
            <!-- Producto 1 -->
            <div class="product">
                <img src="assets/images/Taconesnegros.jpg" alt="Zapatilla 1">
                <div class="product-info">
                    <h3>Zapatilla Rosas</h3>
                    <p>Talla: 36</p>
                    <p>Tacones suaves para ocasiones casuales.</p>
                    <p class="price">$60.00</p>
                </div>
                <div class="button-container">
                    <a href="agregar_zapato.php?categoria=zapatillas&nombre=ZapatillaRosas&talla=36&descripcion=Zapatillas suaves para ocasiones casuales&precio=60&imagen=zapatillasRosas.jpg" class="add-button">Agregar</a>
                    <a href="eliminar_zapato.php?categoria=zapatillas&nombre=ZapatillaRosas" class="cancel-button">Cancelar</a>
                </div>
            </div>
            <!-- Producto 2 -->
            <div class="product">
                <img src="assets/images/TaconesBlancos.jpeg" alt="Zapatilla 2">
                <div class="product-info">
                    <h3>Zapatilla Blancas</h3>
                    <p>Talla: 37</p>
                    <p>Tacones blancos para cualquier ocasion.</p>
                    <p class="price">$65.00</p>
                </div>
                <div class="button-container">
                    <a href="agregar_zapato.php?categoria=zapatillas&nombre=ZapatillaBlancas&talla=37&descripcion=Zapatillas deportivas para entrenamiento&precio=65&imagen=zapatillasBlancas.jpg" class="add-button">Agregar</a>
                    <a href="eliminar_zapato.php?categoria=zapatillas&nombre=ZapatillaBlancas" class="cancel-button">Cancelar</a>
                </div>
            </div>
            <!-- Producto 3 -->
            <div class="product">
                <img src="assets/images/Taconesazul.jpeg" alt="Zapatilla 3">
                <div class="product-info">
                    <h3>Zapatilla Negras</h3>
                    <p>Talla: 38</p>
                    <p>Tacones elegantes y modernas.</p>
                    <p class="price">$70.00</p>
                </div>
                <div class="button-container">
                    <a href="agregar_zapato.php?categoria=zapatillas&nombre=ZapatillaNegras&talla=38&descripcion=Zapatillas elegantes y modernas&precio=70&imagen=zapatillasNegras.jpg" class="add-button">Agregar</a>
                    <a href="eliminar_zapato.php?categoria=zapatillas&nombre=ZapatillaNegras" class="cancel-button">Cancelar</a>
                </div>
            </div>
        </div>

        <!-- Bloque de Sandalias -->
        <h2>Sandalias</h2>
        <div class="carousel-container">
            <!-- Producto 1 -->
            <div class="product">
                <img src="assets/images/SandaliasBlancas.webp" alt="Sandalia 1">
                <div class="product-info">
                    <h3>Sandalias Blancas</h3>
                    <p>Talla: 36</p>
                    <p>Sandalias frescas y cómodas para verano.</p>
                    <p class="price">$30.00</p>
                </div>
                <div class="button-container">
                    <a href="agregar_zapato.php?categoria=sandalias&nombre=SandaliasRosas&talla=36&descripcion=Sandalias frescas y cómodas para verano&precio=30&imagen=sandaliasRosas.jpg" class="add-button">Agregar</a>
                    <a href="eliminar_zapato.php?categoria=sandalias&nombre=SandaliasRosas" class="cancel-button">Cancelar</a>
                </div>
            </div>
            <!-- Producto 2 -->
            <div class="product">
                <img src="assets/images/sandaliasbeige.jpeg" alt="Sandalia 2">
                <div class="product-info">
                    <h3>Sandalias Beige</h3>
                    <p>Talla: 37</p>
                    <p>Sandalias elegantes para eventos casuales.</p>
                    <p class="price">$35.00</p>
                </div>
                <div class="button-container">
                    <a href="agregar_zapato.php?categoria=sandalias&nombre=SandaliasBeige&talla=37&descripcion=Sandalias elegantes para eventos casuales&precio=35&imagen=sandaliasBeige.jpg" class="add-button">Agregar</a>
                    <a href="eliminar_zapato.php?categoria=sandalias&nombre=SandaliasBeige" class="cancel-button">Cancelar</a>
                </div>
            </div>
            <!-- Producto 3 -->
            <div class="product">
                <img src="assets/images/sandaliasnegra.jpeg" alt="Sandalia 3">
                <div class="product-info">
                    <h3>Sandalias Negras</h3>
                    <p>Talla: 38</p>
                    <p>Sandalias cómodas para cualquier ocasión.</p>
                    <p class="price">$40.00</p>
                </div>
                <div class="button-container">
                    <a href="agregar_zapato.php?categoria=sandalias&nombre=SandaliasNegras&talla=38&descripcion=Sandalias cómodas para cualquier ocasión&precio=40&imagen=sandaliasNegras.jpg" class="add-button">Agregar</a>
                    <a href="eliminar_zapato.php?categoria=sandalias&nombre=SandaliasNegras" class="cancel-button">Cancelar</a>
                </div>
            </div>
        </div>

        <!-- Botón de Volver a la Página Principal -->
        <a href="main.php" class="back-button">Volver a la Página Principal</a>
    </div>
</body>
</html>
