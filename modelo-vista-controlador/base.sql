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