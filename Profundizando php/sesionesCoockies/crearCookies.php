<?php

//COOKIE: FICHERO QUE SE ALMACENA EN EL ORDENADOR DEL USUARIO
//CON EL FIN DE GUARDAR DATOS

//setcookie("nombre", "valor qeu solo puede ser string", caducidad, ruta, dominio);


//la siguiente es basica
setcookie("migalleta", "valor de la galleta");
//la siguiente dura un año
setcookie("unyear", "valor de la segunda galleta", time()+(60*60*24*365));

header('location:verCookies.php');

?>
