<?php

// Autor: Mateo Álvarez Murillo
// Fecha de creación: 2023

// Este código se proporciona bajo la Licencia MIT.
// Para más información, consulta el archivo LICENSE en la raíz del repositorio. 

$password = '12345';
$password1 = '123456a';
$password2 = '123456';
echo preg_match('/^[0-9]{6,9}$/', $password);
//Resultado 0
echo "<br>";
var_dump(preg_match('/^[0-9]{6,9}$/', $password1));
//Resultado int(0)
echo "<br>";
var_dump((bool)preg_match('/^[0-9]{6,9}$/', $password2));
//Resultado bool(true)
