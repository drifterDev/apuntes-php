<?php

// Autor: Mateo Álvarez Murillo
// Fecha de creación: 2023

// Este código se proporciona bajo la Licencia MIT.
// Para más información, consulta el archivo LICENSE en la raíz del repositorio. 

function division()
{
  return 4 / 0;
}


try {
  division();
} catch (Throwable $th) {
  echo 'Mensaje: ' . $th->getMessage() . "\n";
  echo 'Código: ' . $th->getCode() . "\n";
  echo 'Archivo: ' . $th->getFile() . "\n";
  echo 'Linea: ' . $th->getLine() . "\n";
  echo 'Cadena de ejecución que hizo que sucediera: ' . "\n";
  var_dump($th->getTrace());
  // $th->getTraceAsString()
}
