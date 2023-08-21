<?php
// Autor: Mateo Álvarez Murillo
// Fecha de creación: 2023

// Este código se proporciona bajo la Licencia MIT.
// Para más información, consulta el archivo LICENSE en la raíz del repositorio. 

// Constantes predefinidas
// PHP_VERSION;
// PHP_OS;
// E_ERROR;

// Constantes mágicas
// __FILE__;
// __DIR__;
// __LINE__;

// Las constantes son sensibles a la mayusculas
define("nombre", "Mateo");
define("NOMBRE", "Daniel");
echo nombre;
echo "\n";
echo NOMBRE;
echo "\n\n";

const PI = 3.1416;
echo PI;
echo "\n\n";

$bool = true;
if ($bool) {
  // Const no se puede declarar en bloques de codigo
  define("const_bloque", "Constante de bloque");
  echo const_bloque;
}
