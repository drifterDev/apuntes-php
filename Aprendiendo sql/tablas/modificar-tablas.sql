/*
Modificar tablas
*/


ALTER TABLE usuarios RENAME TO usuarios2;

#Cambiar nombre de una columna
ALTER TABLE usuarios2 CHANGE apellidos apellido varchar(100) NULL;

#Modificar columna sin cambiar nombre
ALTER TABLE usuarios2 MODIFY apellido char(50) NOT NULL;


#Añadir columnna
ALTER TABLE usuarios2 ADD website varchar(100) NULL;