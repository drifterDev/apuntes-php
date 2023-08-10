<?php

// Autor: Mateo Álvarez Murillo
// Fecha de creación: 2023

// Este código se proporciona bajo la Licencia MIT.
// Para más información, consulta el archivo LICENSE en la raíz del repositorio. 

$filas = (int) $_REQUEST["number"];
for ($i = 0; $i < $filas; $i++) {
  echo "<p>" . str_repeat("* ", ($i + 1)) . "</p>";
}
