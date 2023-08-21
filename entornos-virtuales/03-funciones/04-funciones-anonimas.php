<?php
// Autor: Mateo Álvarez Murillo
// Fecha de creación: 2023

// Este código se proporciona bajo la Licencia MIT.
// Para más información, consulta el archivo LICENSE en la raíz del repositorio. 

$greet = function ($name) {
  return "Hola {$name}";
};

echo $greet('Mateo');
echo "\n";

$numbers = [2, 4, 6, 8];

$nums2 = array_map(fn ($current) => $current * 2, $numbers);

print_r($nums2);

// Palabra reservada use
$nombre = "Mateo";
// Se usa para utilizar variables fuera del ambito de la función
$cambiar_nombre = function () use ($nombre) {
  // Se usa solo para leer no sobreescribir
  return $nombre;
};
echo $cambiar_nombre();
