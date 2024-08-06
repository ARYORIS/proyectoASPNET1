<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Zapato</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            background-color: #fff;
            padding: 20px 40px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            width: 100%;
        }

        .form-container h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        .form-container label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        .form-container input[type="text"],
        .form-container input[type="number"],
        .form-container textarea,
        .form-container select {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            background-color: #f9f9f9;
        }

        .form-container input[type="submit"] {
            width: 100%;
            padding: 15px;
            border: none;
            border-radius: 5px;
            background-color: #4CAF50;
            color: white;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .form-container input[type="submit"]:hover {
            background-color: #45a049;
        }

        .form-container .back-button {
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

        .form-container .back-button:hover {
            background-color: #6a0dad;
        }
    </style>
</head>
<body>
    <div class="form-container">
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
        <a href="main.php" class="back-button">Volver a la Página Principal</a>
    </div>
</body>
</html>

