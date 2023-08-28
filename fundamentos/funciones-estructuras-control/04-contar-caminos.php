<?php

// Autor: Mateo Álvarez Murillo
// Fecha de creación: 2023

// Este código se proporciona bajo la Licencia MIT.
// Para más información, consulta el archivo LICENSE en la raíz del repositorio. 

$n = readline("Ingresa a que puesto te diriges: ");
$res = array(
  0 => 0,
  1 => 1,
  2 => 1,
);
for ($i = 3; $i <= $n; $i++) {
  $res[$i] = $res[$i - 2] + $res[$i - 1];
}
echo "Cantidad de caminos: " . $res[$n];
