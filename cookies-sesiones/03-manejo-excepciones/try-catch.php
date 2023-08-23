<?php

// Autor: Mateo Álvarez Murillo
// Fecha de creación: 2023

// Este código se proporciona bajo la Licencia MIT.
// Para más información, consulta el archivo LICENSE en la raíz del repositorio. 

try {
  // Division por cero
  // echo 4 / 0;

  // Creando excepciones
  $pet = readline("¿Qué quieres adoptar? ");
  if ($pet != "gato") {
    throw new Exception("Error al elegir mascota");
  } else {
    echo "Adoptaste un gato!";
  }
} catch (Throwable $err) {
  echo "Ocurrio este error: " . $err->getMessage() . "\n";
}
