<?php
// Autor: Mateo Álvarez Murillo
// Fecha de creación: 2023

// Este código se proporciona bajo la Licencia MIT.
// Para más información, consulta el archivo LICENSE en la raíz del repositorio. 

function suma(&$n1, &$n2)
{
  $n1++;
  $n2++;
  echo $n1 . " + " . $n2 . " = ";
  return $n1 + $n2;
}

$num1 = 14;
$num2 = 24;
echo $num1 . " + " . $num2 . " = " . ($num1 + $num2) . "\n";
echo suma($num1, $num2);
echo "\n";
echo suma($num1, $num2);
