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


INSERT INTO retiros (metodo_pago, tipo, fecha, cantidad, descripcion)
VALUES
    (1, 1, NOW(), 50000, 'Retiro por compras de víveres'),
    (1, 2, NOW(), 75000, 'Retiro para gastos de transporte'),
    (2, 1, NOW(), 110000, 'Retiro para vacaciones en la playa'),
    (2, 2, NOW(), 90000, 'Retiro para equipo de ejercicio'),
    (1, 2, NOW(), 85000, 'Retiro para regalos de cumpleaños'),
    (2, 1, NOW(), 60000, 'Retiro para pagar facturas'),
    (2, 2, NOW(), 120000, 'Retiro para aprender a cocinar'),
    (1, 1, NOW(), 80000, 'Retiro para reparaciones en casa'),
    (2, 1, NOW(), 65000, 'Retiro para adopción de mascota'),
    (1, 2, NOW(), 70000, 'Retiro para cursos en línea'),
    (2, 1, NOW(), 110000, 'Retiro para mejoras en el jardín'),
    (1, 2, NOW(), 90000, 'Retiro para donación a organización benéfica'),
    (2, 1, NOW(), 60000, 'Retiro para reparaciones en auto'),
    (2, 2, NOW(), 95000, 'Retiro para fines de semana de camping'),
    (1, 1, NOW(), 80000, 'Retiro para compras de ropa'),
    (1, 2, NOW(), 70000, 'Retiro para clases de baile'),
    (1, 1, NOW(), 75000, 'Retiro para reparaciones en el hogar'),
    (2, 1, NOW(), 120000, 'Retiro para entretenimiento del fin de semana'),
    (1, 2, NOW(), 95000, 'Retiro para cena romántica'),
    (2, 2, NOW(), 100000, 'Retiro para actividades al aire libre');

INSERT INTO ingresos (metodo_pago, tipo, fecha, cantidad, descripcion)
VALUES
    (1, 1, NOW(), 150000, 'Ingreso por salario mensual'),
    (2, 2, NOW(), 80000, 'Ingreso por trabajo freelance'),
    (1, 1, NOW(), 60000, 'Ingreso por venta de artesanías'),
    (2, 2, NOW(), 120000, 'Ingreso por consultoría en línea'),
    (2, 1, NOW(), 90000, 'Ingreso por servicios de diseño gráfico'),
    (1, 2, NOW(), 75000, 'Ingreso por clases particulares'),
    (2, 1, NOW(), 100000, 'Ingreso por alquiler de propiedad'),
    (2, 2, NOW(), 85000, 'Ingreso por ventas en línea'),
    (1, 1, NOW(), 70000, 'Ingreso por servicios de consultoría'),
    (1, 2, NOW(), 110000, 'Ingreso por diseño de sitios web'),
    (1, 1, NOW(), 80000, 'Ingreso por servicios de redacción'),
    (2, 2, NOW(), 95000, 'Ingreso por clases de música en línea'),
    (2, 1, NOW(), 130000, 'Ingreso por alquiler de propiedad'),
    (2, 2, NOW(), 70000, 'Ingreso por venta de productos usados'),
    (1, 1, NOW(), 95000, 'Ingreso por servicios de jardinería'),
    (2, 2, NOW(), 85000, 'Ingreso por clases de idiomas en línea'),
    (1, 1, NOW(), 100000, 'Ingreso por diseño de jardines'),
    (1, 2, NOW(), 75000, 'Ingreso por clases de cocina en grupo'),
    (1, 1, NOW(), 120000, 'Ingreso por venta de ropa vintage'),
    (1, 2, NOW(), 90000, 'Ingreso por servicios de diseño de interiores'),
    (2, 1, NOW(), 65000, 'Ingreso por consultas psicológicas en línea'),
    (2, 2, NOW(), 110000, 'Ingreso por servicios de fotografía profesional'),
    (2, 1, NOW(), 85000, 'Ingreso por diseño de moda');
