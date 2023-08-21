<?php
// Autor: Mateo Álvarez Murillo
// Fecha de creación: 2023

// Este código se proporciona bajo la Licencia MIT.
// Para más información, consulta el archivo LICENSE en la raíz del repositorio. 

$outside_variable = "Esto es una variable global";

// Forma 1
function my_function()
{
  global $outside_variable;
  echo $outside_variable;
}

my_function();
echo "\n";
// Forma 2
function my_function2()
{
  echo $GLOBALS['outside_variable'];
}
my_function2();
