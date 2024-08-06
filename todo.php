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
    <title>Todos los Géneros y Tipos de Zapatos</title>
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
        <h1>Todos los Géneros y Tipos de Zapatos</h1>

        <!-- Bloque de Tennis para Hombres y Niños -->
        <h2>Tennis para Hombres y Niños</h2>
        <div class="carousel-container">
            <!-- Producto 1 -->
            <div class="product">
                <img src="assets/images/Tennis.jpeg" alt="Tennis 1">
                <div class="product-info">
                    <h3>Tennis 1</h3>
                    <p>Talla: 42</p>
                    <p>Tennis bajos color blanco.</p>
                    <p class="price">$50.00</p>
                </div>
                <div class="button-container">
                    <a href="agregar_zapato.php?categoria=tennis&nombre=Tennis1&talla=42&descripcion=Tennis bajos color blanco&precio=50&imagen=Tennis1.jpeg" class="add-button">Agregar</a>
                    <a href="eliminar_zapato.php?categoria=tennis&nombre=Tennis1" class="cancel-button">Cancelar</a>
                </div>
            </div>
            <!-- Producto 2 -->
            <div class="product">
                <img src="assets/images/tennisNegros.webp" alt="Tennis 2">
                <div class="product-info">
                    <h3>Tennis 2</h3>
                    <p>Talla: 43</p>
                    <p>Tennis deportivos color negro.</p>
                    <p class="price">$55.00</p>
                </div>
                <div class="button-container">
                    <a href="agregar_zapato.php?categoria=tennis&nombre=Tennis2&talla=43&descripcion=Tennis deportivos color negro&precio=55&imagen=Tennis2.jpeg" class="add-button">Agregar</a>
                    <a href="eliminar_zapato.php?categoria=tennis&nombre=Tennis2" class="cancel-button">Cancelar</a>
                </div>
            </div>
            <!-- Producto 3 -->
            <div class="product">
                <img src="assets/images/TennisBl.webp" alt="Tennis 3">
                <div class="product-info">
                    <h3>Tennis 3</h3>
                    <p>Talla: 44</p>
                    <p>Tennis elegantes color gris.</p>
                    <p class="price">$60.00</p>
                </div>
                <div class="button-container">
                    <a href="agregar_zapato.php?categoria=tennis&nombre=Tennis3&talla=44&descripcion=Tennis elegantes color gris&precio=60&imagen=Tennis3.jpeg" class="add-button">Agregar</a>
                    <a href="eliminar_zapato.php?categoria=tennis&nombre=Tennis3" class="cancel-button">Cancelar</a>
                </div>
            </div>
        </div>

        <!-- Bloque de Tennis para Mujeres y Niñas -->
        <h2>Tennis para Mujeres y Niñas</h2>
        <div class="carousel-container">
            <!-- Producto 1 -->
            <div class="product">
                <img src="assets/images/tennisRosados.jpg" alt="Tennis Rosados">
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
                <img src="assets/images/tennisnegros.jpeg" alt="Tennis Negros">
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
                <img src="assets/images/tennisazules.jpeg" alt="Tennis Azul">
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

        <!-- Bloque de Sandalias -->
        <h2>Sandalias</h2>
        <div class="carousel-container">
            <!-- Producto 1 -->
            <div class="product">
                <img src="assets/images/sandalias1.jpeg" alt="Sandalias 1">
                <div class="product-info">
                    <h3>Sandalias 1</h3>
                    <p>Talla: 38</p>
                    <p>Sandalias casuales color beige.</p>
                    <p class="price">$30.00</p>
                </div>
                <div class="button-container">
                    <a href="agregar_zapato.php?categoria=sandalias&nombre=Sandalias1&talla=38&descripcion=Sandalias casuales color beige&precio=30&imagen=sandalias1.jpg" class="add-button">Agregar</a>
                    <a href="eliminar_zapato.php?categoria=sandalias&nombre=Sandalias1" class="cancel-button">Cancelar</a>
                </div>
            </div>
            <!-- Producto 2 -->
            <div class="product">
                <img src="assets/images/sandalias2.jpeg" alt="Sandalias 2">
                <div class="product-info">
                    <h3>Sandalias 2</h3>
                    <p>Talla: 39</p>
                    <p>Sandalias elegantes color negro.</p>
                    <p class="price">$35.00</p>
                </div>
                <div class="button-container">
                    <a href="agregar_zapato.php?categoria=sandalias&nombre=Sandalias2&talla=39&descripcion=Sandalias elegantes color negro&precio=35&imagen=sandalias2.jpg" class="add-button">Agregar</a>
                    <a href="eliminar_zapato.php?categoria=sandalias&nombre=Sandalias2" class="cancel-button">Cancelar</a>
                </div>
            </div>
            <!-- Producto 3 -->
            <div class="product">
                <img src="assets/images/sandalias3.jpeg" alt="Sandalias 3">
                <div class="product-info">
                    <h3>Sandalias 3</h3>
                    <p>Talla: 40</p>
                    <p>Sandalias deportivas color azul.</p>
                    <p class="price">$40.00</p>
                </div>
                <div class="button-container">
                    <a href="agregar_zapato.php?categoria=sandalias&nombre=Sandalias3&talla=40&descripcion=Sandalias deportivas color azul&precio=40&imagen=sandalias3.jpg" class="add-button">Agregar</a>
                    <a href="eliminar_zapato.php?categoria=sandalias&nombre=Sandalias3" class="cancel-button">Cancelar</a>
                </div>
            </div>
        </div>

        <!-- Bloque de Tacones -->
        <h2>Tacones</h2>
        <div class="carousel-container">
            <!-- Producto 1 -->
            <div class="product">
                <img src="assets/images/tacones1.jpeg" alt="Tacones 1">
                <div class="product-info">
                    <h3>Tacones 1</h3>
                    <p>Talla: 37</p>
                    <p>Tacones elegantes color rojo.</p>
                    <p class="price">$60.00</p>
                </div>
                <div class="button-container">
                    <a href="agregar_zapato.php?categoria=tacones&nombre=Tacones1&talla=37&descripcion=Tacones elegantes color rojo&precio=60&imagen=tacones1.jpg" class="add-button">Agregar</a>
                    <a href="eliminar_zapato.php?categoria=tacones&nombre=Tacones1" class="cancel-button">Cancelar</a>
                </div>
            </div>
            <!-- Producto 2 -->
            <div class="product">
                <img src="assets/images/tacones2.jpeg" alt="Tacones 2">
                <div class="product-info">
                    <h3>Tacones 2</h3>
                    <p>Talla: 38</p>
                    <p>Tacones altos color negro.</p>
                    <p class="price">$65.00</p>
                </div>
                <div class="button-container">
                    <a href="agregar_zapato.php?categoria=tacones&nombre=Tacones2&talla=38&descripcion=Tacones altos color negro&precio=65&imagen=tacones2.jpg" class="add-button">Agregar</a>
                    <a href="eliminar_zapato.php?categoria=tacones&nombre=Tacones2" class="cancel-button">Cancelar</a>
                </div>
            </div>
            <!-- Producto 3 -->
            <div class="product">
                <img src="assets/images/tacones3.jpeg" alt="Tacones 3">
                <div class="product-info">
                    <h3>Tacones 3</h3>
                    <p>Talla: 39</p>
                    <p>Tacones de fiesta color dorado.</p>
                    <p class="price">$70.00</p>
                </div>
                <div class="button-container">
                    <a href="agregar_zapato.php?categoria=tacones&nombre=Tacones3&talla=39&descripcion=Tacones de fiesta color dorado&precio=70&imagen=tacones3.jpg" class="add-button">Agregar</a>
                    <a href="eliminar_zapato.php?categoria=tacones&nombre=Tacones3" class="cancel-button">Cancelar</a>
                </div>
            </div>
        </div>

        <!-- Botón para volver a la página principal -->
        <a href="main.php" class="back-button">Volver a la Página Principal</a>
    </div>
</body>
</html>

