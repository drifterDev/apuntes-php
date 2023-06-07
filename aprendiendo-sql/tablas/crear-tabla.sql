/*
 * MIT License
 *
 * Copyright (c) 2023 Mateo Álvarez Murillo
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 * 
 * This software and associated files are subject to the terms and conditions of
 * the MIT License and are included in this distribution. A copy of the license
 * can be found in the file LICENSE in the root of this distribution.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 */
 
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
