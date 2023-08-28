<?php

// Autor: Mateo Álvarez Murillo
// Fecha de creación: 2023

// Este código se proporciona bajo la Licencia MIT.
// Para más información, consulta el archivo LICENSE en la raíz del repositorio. 

function get_color()
{

  $numero_aleatorio = rand(1, 4);

  switch ($numero_aleatorio) {
    case 1:
      echo "Blue\n";
      break;

    case 2:
      echo "Red\n";
      break;

    case 3:
      echo "Yellow\n";
      break;

    default:
      echo "No hay colores hoy\n";
  }
}

for ($i = 0; $i < 20; $i++) {
  get_color();
}

echo "\n";

function suma($numero1, $numero2)
{
  echo $numero1 + $numero2;
}

suma(2, 3);
echo "\n";

function sumatoria(...$parametros)
{
  $res = 0;
  foreach ($parametros as $num) {
    $res += $num;
  }
  echo $res;
}

sumatoria(1, 2, 3, 4, 5, 6, 7, 8);
echo "\n";
