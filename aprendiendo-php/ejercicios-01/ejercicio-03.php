<?php

// Autor: Mateo Álvarez Murillo
// Fecha de creación: 2023

// Este código se proporciona bajo la Licencia MIT.
// Para más información, consulta el archivo LICENSE en la raíz del repositorio. 


$n = 1;
while ($n <= 40) {
  if ($n == 40) {
    echo 'Cuadrado de: ' . $n . ' = ' . ($n * $n);
  } else {
    echo 'Cuadrado de: ' . $n . ' = ' . ($n * $n) . '<br/>';
  }
  $n++;
}
