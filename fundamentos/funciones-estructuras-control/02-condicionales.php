<?php

// Autor: Mateo Álvarez Murillo
// Fecha de creación: 2023

// Este código se proporciona bajo la Licencia MIT.
// Para más información, consulta el archivo LICENSE en la raíz del repositorio. 

$saldo = 450;
if ($saldo > 500) {
  echo "Saldo suficiente para la compra";
} else {
  echo "No hay saldo suficiente para la compra";
}
echo "\n";

$color = "rojo";
switch ($color) {
  case 'amarillo':
    echo "El sol es brillante";
    break;
  case 'azul':
    echo "El mar es inmenso";
    break;
  case 'verde':
    echo "La naturaleza es hermosa";
    break;
  case 'rojo':
    echo "Las fresas son ricas";
    break;
  default:
    echo "No hay frase hoy";
    break;
}
