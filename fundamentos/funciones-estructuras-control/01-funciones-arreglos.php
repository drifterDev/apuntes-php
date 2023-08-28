<?php

// Autor: Mateo Álvarez Murillo
// Fecha de creación: 2023

// Este código se proporciona bajo la Licencia MIT.
// Para más información, consulta el archivo LICENSE en la raíz del repositorio. 

$nums = [1, 2, 3, 4, 5, 6];

echo count($nums) . "\n";
array_push($nums, 7) . "\n";
var_dump($nums);
echo var_dump(is_array($nums)) . "\n";
echo var_dump(is_array(56)) . "\n";

// Separar un string para convertirlo en una lista
$entrada = "23 45 564 312 3564";
$nums = explode(" ", $entrada);
var_dump($nums);

// Unir una lista para convertirlo en un string
$salida = implode(", ", $nums);
echo $salida . "\n";

$emails = array(
  "Mateo" => "mateo@correo",
  "Daniel" => "daniel@correo",
  "Kevin" => "kevin@correo",
  "Yesica" => "yesica@correo"
);

// Obtener las llaves de un diccionario
var_dump(array_keys($emails));
