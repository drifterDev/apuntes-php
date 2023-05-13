/*
Creación de una tabla en sql



Tipos de datos en los campos:
int(numero caracteres)  ENTERO
integer(numero caracteres)  ENTERO (maximo 4294967295)
char(numero caracteres)  STRING / ALFANUMERICO
varchar(numero caracteres)  STRING / ALFANUMERICO
float(numero cifras, numero decimales)  DECIMAL/COMA FLOTANTE
date, time, timestrap


//STRING GRANDES
TEXT(65335 caracteres mas o menos)
MEDIUMTEXT (16 millones mas o menos)
LONGTEXT (4 billones mas o menos)


//ENTEROS GRANDES 
MEDIUMINT
BIGINT
*/

/*
Crear tablas:
*/
CREATE TABLE usuarios(
id        int(11),
nombre    varchar(100),
apellidos varchar(255),
email     varchar(100),
password  varchar(255)
);

/*
Eliminar tablas:
*/
drop TABLE usuarios;
