-- Eliminar y recrear la base de datos
DROP DATABASE IF EXISTS PHP;
CREATE DATABASE PHP;
USE PHP;

-- Crear la tabla de usuarios
CREATE TABLE usuarios (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(100) NOT NULL,
  email VARCHAR(255) NOT NULL UNIQUE,
  password VARCHAR(255) NOT NULL
);

-- Insertar varios usuarios de ejemplo
INSERT INTO usuarios (nombre, email, password) VALUES
('Ana Pérez', 'ana.perez@example.com', 'clave123'),
('Juan Gómez', 'juan.gomez@example.com', 'miPass456'),
('Lucía Torres', 'lucia.torres@example.com', 'luciaPass!'),
('Carlos Ramírez', 'carlos.ramirez@example.com', '1234abcd'),
('María López', 'maria.lopez@example.com', 'maria2025'),
('Pedro Sánchez', 'pedro.sanchez@example.com', 'passPedro'),
('Laura Díaz', 'laura.diaz@example.com', 'laura@2025'),
('Andrés Herrera', 'andres.herrera@example.com', 'andres123'),
('Sofía Morales', 'sofia.morales@example.com', 'sofiaXYZ'),
('Miguel Castro', 'miguel.castro@example.com', 'mikePass99');
