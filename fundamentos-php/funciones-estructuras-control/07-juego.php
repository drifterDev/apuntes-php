<?php

// Autor: Mateo Álvarez Murillo
// Fecha de creación: 2023

// Este código se proporciona bajo la Licencia MIT.
// Para más información, consulta el archivo LICENSE en la raíz del repositorio. 

$palabras_disponibles = array("manzana", "banana", "naranja", "uva", "fresa", "piña", "kiwi", "sandía", "melón", "mango", "pera", "cereza", "durazno", "mandarina", "pomelo", "frambuesa", "coco", "ciruela", "granada", "guayaba");
$palabra_escogida = $palabras_disponibles[rand(0, count($palabras_disponibles) - 1)];
echo "Comienza el juego! \n";
$letras = str_split($palabra_escogida);
$lives = 3;
$len = strlen($palabra_escogida);
$array = array();
for ($i = 0; $i < $len; $i++) {
  array_push($array, "_");
}
echo implode("", $array);
echo "\nLives: " . $lives;
echo "\n";
$win = false;
while ($lives > 0 && !$win) {
  $letra = strtolower(readline("Escribe una letra: "));
  if (!in_array($letra, $letras)) {
    $lives -= 1;
  } else {
    for ($i = 0; $i < $len; $i++) {
      if ($letras[$i] === $letra) {
        $array[$i] = $letra;
      }
    }
  }
  echo implode("", $array);
  echo "\nLives: " . $lives;
  echo "\n";
  if (!in_array("_", $array)) {
    $win = true;
  }
}
if ($win) {
  echo "\nYou win!";
} else {
  echo "\nGame over\nLetra oculta: " . $palabra_escogida;
}
