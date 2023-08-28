<?php

// Autor: Mateo Álvarez Murillo
// Fecha de creación: 2023

// Este código se proporciona bajo la Licencia MIT.
// Para más información, consulta el archivo LICENSE en la raíz del repositorio. 


$precios_de_cafes = [12, 56, 32, 89, 2, 1];

usort($precios_de_cafes, function ($a, $b) {
  return $a <=> $b;
});

var_dump($precios_de_cafes);

$precios_de_cafes = [12, 56, 32, 89, 2, 1];

sort($precios_de_cafes);

var_dump($precios_de_cafes);


date_default_timezone_set('America/Bogota');

function hora()
{
  return date('h:i:s');
}

echo hora();
