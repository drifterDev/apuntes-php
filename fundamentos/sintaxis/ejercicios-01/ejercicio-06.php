<?php

// Autor: Mateo Álvarez Murillo
// Fecha de creación: 2023

// Este código se proporciona bajo la Licencia MIT.
// Para más información, consulta el archivo LICENSE en la raíz del repositorio. 


echo "<table border='1'>";
for ($i = 0; $i < 11; $i++) {
  echo '<tr>';
  for ($j = 1; $j < 11; $j++) {
    if ($i == 0) {
      echo "<th>Tabla del $j</th>";
    } else {
      echo "<td>$i x $j = " . ($i * $j) . '</td>';
    }
  }
  echo '</tr>';
}
echo '</table>';
