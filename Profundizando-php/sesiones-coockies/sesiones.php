<?php


// Autor: Mateo Álvarez Murillo
// Fecha de creación: 2023

// Este código se proporciona bajo la Licencia MIT.
// Para más información, consulta el archivo LICENSE en la raíz del repositorio. 


//SESION: ALMACENAR DATOS DEL USUARIO MIENTRAS DURE LA SESION
session_start();
$variable_normal = "Soy un string";

$_SESSION['variable_persistente'] = 'SESION ACTIVA';

echo $variable_normal . '<br/>';
echo $_SESSION['variable_persistente'] . '<br/>';
