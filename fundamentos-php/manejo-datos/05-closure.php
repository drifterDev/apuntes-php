<?php

// Autor: Mateo Álvarez Murillo
// Fecha de creación: 2023

// Este código se proporciona bajo la Licencia MIT.
// Para más información, consulta el archivo LICENSE en la raíz del repositorio. 

// Función anonima
$greet = function ($name) {
  return "Hola, $name!";
};

echo $greet('Mateo');
echo "\n";

function greet2(Closure $lang, $name)
{
  return $lang($name);
}

$es = function ($name) {
  return "¡Hola, $name!";
};

$en = function ($name) {
  return "Hello, $name!";
};

echo greet2($es, "Daniel");
echo "\n";
echo greet2($en, "Yesica");
