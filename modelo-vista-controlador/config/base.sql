CREATE DATABASE dbs_php_mvc;

USE dbs_php_mvc;

CREATE TABLE
    usuarios(
        id int AUTO_INCREMENT NOT NULL PRIMARY KEY,
        nombre VARCHAR(100) NOT NULL,
        apellidos VARCHAR(100) NOT NULL,
        email VARCHAR(100) NOT NULL,
        password VARCHAR(100) NOT NULL,
        fecha DATE NOT NULL,
        CONSTRAINT uq_email UNIQUE(email)
    ) ENGINE = InnoDb;

CREATE TABLE
    notas(
        id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
        usuario_id INT NOT NULL,
        titulo VARCHAR(255) NOT NULL,
        descripcion VARCHAR(255),
        fecha DATE NOT NULL,
        CONSTRAINT fk_nota_usuario FOREIGN KEY (usuario_id) REFERENCES usuarios(id)
    ) ENGINE = InnoDb;

-- Insertar usuarios

INSERT INTO
    usuarios (
        nombre,
        apellidos,
        email,
        password,
        fecha
    )
VALUES (
        'Juan',
        'Pérez',
        'juan@example.com',
        'clave123',
        '1990-05-15'
    ), (
        'María',
        'López',
        'maria@example.com',
        'pass456',
        '1988-10-20'
    ), (
        'Carlos',
        'González',
        'carlos@example.com',
        'secret789',
        '1995-03-08'
    );

-- Insertar notas para el usuario con ID 1

INSERT INTO
    notas (
        usuario_id,
        titulo,
        descripcion,
        fecha
    )
VALUES (
        1,
        'Compras',
        'Leche, huevos, pan',
        '2023-08-30'
    ), (
        1,
        'Tareas',
        'Hacer la tarea de matemáticas',
        '2023-08-29'
    );

-- Insertar notas para el usuario con ID 2

INSERT INTO
    notas (
        usuario_id,
        titulo,
        descripcion,
        fecha
    )
VALUES (
        2,
        'Lista de películas',
        'Ver las películas recomendadas',
        '2023-08-28'
    ), (
        2,
        'Ideas para el proyecto',
        'Investigar sobre machine learning',
        '2023-08-27'
    );

-- Insertar notas para el usuario con ID 3

INSERT INTO
    notas (
        usuario_id,
        titulo,
        descripcion,
        fecha
    )
VALUES (
        3,
        'Recetas',
        'Encontrar receta de pastel de chocolate',
        '2023-08-26'
    ), (
        3,
        'Gimnasio',
        'Plan de ejercicios para la semana',
        '2023-08-25'
    );