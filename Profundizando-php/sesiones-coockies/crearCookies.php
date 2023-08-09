<?php


// Autor: Mateo Álvarez Murillo
// Fecha de creación: 2023

// Este código se proporciona bajo la Licencia MIT.
// Para más información, consulta el archivo LICENSE en la raíz del repositorio. 


//COOKIE: FICHERO QUE SE ALMACENA EN EL ORDENADOR DEL USUARIO
//CON EL FIN DE GUARDAR DATOS

//setcookie("nombre", "valor qeu solo puede ser string", caducidad, ruta, dominio);


//la siguiente es basica
setcookie("migalleta", "valor de la galleta");
//la siguiente dura un año
setcookie("unyear", "valor de la segunda galleta", time() + (60 * 60 * 24 * 365));

header('location:verCookies.php');
