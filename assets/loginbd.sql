-- Crear la base de datos
CREATE DATABASE loginbd;

-- Usar la base de datos creada
USE loginbd;

-- Crear la tabla usuarios
CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre_completo VARCHAR(50),
    correo_electronico VARCHAR(50),
    usuario VARCHAR(50),
    contrasena VARCHAR(50)
);
