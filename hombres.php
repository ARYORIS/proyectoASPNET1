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
    <title>Zapatos de Hombre y Niño</title>
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
            overflow-x: auto;
            gap: 20px;
            padding: 10px 0;
        }

        .carousel-container::-webkit-scrollbar {
            display: none;
        }

        .product {
            flex: 0 0 auto;
            width: 300px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            text-align: center;
            position: relative;
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
        <h1>Zapatos de Hombre y Niño</h1>

        <!-- Bloque de Tennis -->
        <h2>Tennis</h2>
        <div class="carousel-container">
            <!-- Producto 1 -->
            <div class="product">
                <img src="assets/images/Tennis.jpeg" alt="Tennis 1">
                <div class="product-info">
                    <h3></h3>
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

        <!-- Bloque de Zapatillas -->
        <h2>Zapatillas</h2>
        <div class="carousel-container">
            <!-- Producto 1 -->
            <div class="product">
                <img src="assets/images/Zapatillas.jpg" alt="Zapatilla 1">
                <div class="product-info">
                    <h3>Zapatilla 1</h3>
                    <p>Talla: 44</p>
                    <p>Zapatillas deportivas para ocasiones.</p>
                    <p class="price">$60.00</p>
                </div>
                <div class="button-container">
                    <a href="agregar_zapato.php?categoria=zapatillas&nombre=Zapatilla1&talla=44&descripcion=Zapatillas deportivas para ocasiones&precio=60&imagen=Zapatillas1.jpg" class="add-button">Agregar</a>
                    <a href="eliminar_zapato.php?categoria=zapatillas&nombre=Zapatilla1" class="cancel-button">Cancelar</a>
                </div>
            </div>
            <!-- Producto 2 -->
            <div class="product">
                <img src="assets/images/zapatillascafe.webp" alt="Zapatilla 2">
                <div class="product-info">
                    <h3>Zapatilla 2</h3>
                    <p>Talla: 45</p>
                    <p>Zapatillas casuales para todos los días.</p>
                    <p class="price">$65.00</p>
                </div>
                <div class="button-container">
                    <a href="agregar_zapato.php?categoria=zapatillas&nombre=Zapatilla2&talla=45&descripcion=Zapatillas casuales para todos los días&precio=65&imagen=Zapatillas2.jpg" class="add-button">Agregar</a>
                    <a href="eliminar_zapato.php?categoria=zapatillas&nombre=Zapatilla2" class="cancel-button">Cancelar</a>
                </div>
            </div>
            <!-- Producto 3 -->
            <div class="product">
                <img src="assets/images/zapatillasnegras.webp" alt="Zapatilla 3">
                <div class="product-info">
                    <h3>Zapatilla 3</h3>
                    <p>Talla: 46</p>
                    <p>Zapatillas para eventos formales.</p>
                    <p class="price">$70.00</p>
                </div>
                <div class="button-container">
                    <a href="agregar_zapato.php?categoria=zapatillas&nombre=Zapatilla3&talla=46&descripcion=Zapatillas para eventos formales&precio=70&imagen=Zapatillas3.jpg" class="add-button">Agregar</a>
                    <a href="eliminar_zapato.php?categoria=zapatillas&nombre=Zapatilla3" class="cancel-button">Cancelar</a>
                </div>
            </div>
        </div>

        <!-- Bloque de Sandalias -->
        <h2>Sandalias</h2>
        <div class="carousel-container">
            <!-- Producto 1 -->
            <div class="product">
                <img src="assets/images/Zandalias.jpg" alt="Sandalia 1">
                <div class="product-info">
                    <h3>Sandalia 1</h3>
                    <p>Talla: 46</p>
                    <p>Sandalias veraniegas color beige.</p>
                    <p class="price">$55.00</p>
                </div>
                <div class="button-container">
                    <a href="agregar_zapato.php?categoria=sandalias&nombre=Sandalia1&talla=46&descripcion=Sandalias veraniegas color beige&precio=55&imagen=Sandalias1.jpg" class="add-button">Agregar</a>
                    <a href="eliminar_zapato.php?categoria=sandalias&nombre=Sandalia1" class="cancel-button">Cancelar</a>
                </div>
            </div>
            <!-- Producto 2 -->
            <div class="product">
                <img src="assets/images/Sandaliasbl.avif" alt="Sandalia 2">
                <div class="product-info">
                    <h3>Sandalia 2</h3>
                    <p>Talla: 47</p>
                    <p>Sandalias cómodas para el verano.</p>
                    <p class="price">$50.00</p>
                </div>
                <div class="button-container">
                    <a href="agregar_zapato.php?categoria=sandalias&nombre=Sandalia2&talla=47&descripcion=Sandalias cómodas para el verano&precio=50&imagen=Sandalias2.jpg" class="add-button">Agregar</a>
                    <a href="eliminar_zapato.php?categoria=sandalias&nombre=Sandalia2" class="cancel-button">Cancelar</a>
                </div>
            </div>
            <!-- Producto 3 -->
            <div class="product">
                <img src="assets/images/Sandaliasnegras.jpeg" alt="Sandalia 3">
                <div class="product-info">
                    <h3>Sandalia 3</h3>
                    <p>Talla: 48</p>
                    <p>Sandalias deportivas para actividades al aire libre.</p>
                    <p class="price">$60.00</p>
                </div>
                <div class="button-container">
                    <a href="agregar_zapato.php?categoria=sandalias&nombre=Sandalia3&talla=48&descripcion=Sandalias deportivas para actividades al aire libre&precio=60&imagen=Sandalias3.jpg" class="add-button">Agregar</a>
                    <a href="eliminar_zapato.php?categoria=sandalias&nombre=Sandalia3" class="cancel-button">Cancelar</a>
                </div>
            </div>
        </div>

        <!-- Bloque adicional -->
        <h2>Botines</h2>
        <div class="carousel-container">
            <!-- Producto 1 -->
            <div class="product">
                <img src="assets/images/Botinescf.jpeg" alt="Botín 1">
                <div class="product-info">
                    <h3>Botín 1</h3>
                    <p>Talla: 42</p>
                    <p>Botines de cuero color cafe.</p>
                    <p class="price">$80.00</p>
                </div>
                <div class="button-container">
                    <a href="agregar_zapato.php?categoria=botines&nombre=Botín1&talla=42&descripcion=Botines de cuero color negro&precio=80&imagen=Botines1.jpg" class="add-button">Agregar</a>
                    <a href="eliminar_zapato.php?categoria=botines&nombre=Botín1" class="cancel-button">Cancelar</a>
                </div>
            </div>
            <!-- Producto 2 -->
            <div class="product">
                <img src="assets/images/Botinesaz.jpeg" alt="Botín 2">
                <div class="product-info">
                    <h3>Botín 2</h3>
                    <p>Talla: 43</p>
                    <p>Botines color azul.</p>
                    <p class="price">$85.00</p>
                </div>
                <div class="button-container">
                    <a href="agregar_zapato.php?categoria=botines&nombre=Botín2&talla=43&descripcion=Botines deportivos color marrón&precio=85&imagen=Botines2.jpg" class="add-button">Agregar</a>
                    <a href="eliminar_zapato.php?categoria=botines&nombre=Botín2" class="cancel-button">Cancelar</a>
                </div>
            </div>
            <!-- Producto 3 -->
            <div class="product">
                <img src="assets/images/Botinesng.jpeg" alt="Botín 3">
                <div class="product-info">
                    <h3>Botín 3</h3>
                    <p>Talla: 44</p>
                    <p>Botines resistentes al agua color negros.</p>
                    <p class="price">$90.00</p>
                </div>
                <div class="button-container">
                    <a href="agregar_zapato.php?categoria=botines&nombre=Botín3&talla=44&descripcion=Botines resistentes al agua color gris&precio=90&imagen=Botines3.jpg" class="add-button">Agregar</a>
                    <a href="eliminar_zapato.php?categoria=botines&nombre=Botín3" class="cancel-button">Cancelar</a>
                </div>
            </div>
        </div>

        <a href="main.php" class="back-button">Volver a la Página Principal</a>
    </div>
</body>
</html>
