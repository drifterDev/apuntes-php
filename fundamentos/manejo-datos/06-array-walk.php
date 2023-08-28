<?php

// Autor: Mateo Álvarez Murillo
// Fecha de creación: 2023

// Este código se proporciona bajo la Licencia MIT.
// Para más información, consulta el archivo LICENSE en la raíz del repositorio. 

$courses = [
  'frontend' => 'JS',
  'framework' => 'laravel',
  'backend' => 'php'
];

echo "Foreach\n";
foreach ($courses as $key => $var) {
  echo "$key: $var \n";
}

function upper($course, $key)
{
  echo ucfirst($course) . "=> $key \n";
}

echo "\nArray walk\n";
array_walk($courses, 'upper');
