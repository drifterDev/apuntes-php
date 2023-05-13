/*
Creación de una tabla en sql


Valores por defecto
No nulidad
Nulidad
Auto incremento (Se nesesita lo ultimo de constraint de llave primaria)
*/

CREATE TABLE usuarios(
id        int(11) auto_increment NOT NULL,
nombre    varchar(100) NOT NULL,
apellidos varchar(255) DEFAULT 'Alvarez',
email     varchar(100) NULL,
password  varchar(255),
CONSTRAINT pk_usuarios PRIMARY KEY(id)
);
