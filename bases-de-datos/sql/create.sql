CREATE DATABASE dbs_finanzas;

USE dbs_finanzas;

CREATE TABLE
    IF NOT EXISTS retiros(
        id BIGINT(20) PRIMARY KEY NOT NULL AUTO_INCREMENT,
        metodo_pago TINYINT(1) NOT NULL,
        tipo TINYINT(1) NOT NULL,
        fecha TIMESTAMP NOT NULL,
        cantidad FLOAT NOT NULL,
        descripcion TEXT NOT NULL
    );

CREATE TABLE
    IF NOT EXISTS ingresos (
        id BIGINT(20) PRIMARY KEY NOT NULL AUTO_INCREMENT,
        metodo_pago TINYINT(1) NOT NULL,
        tipo TINYINT(1) NOT NULL,
        fecha TIMESTAMP NOT NULL,
        cantidad FLOAT NOT NULL,
        descripcion TEXT NOT NULL
    );

DROP TABLE retiros;

DROP TABLE ingresos;