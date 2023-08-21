<?php
// Autor: Mateo Álvarez Murillo
// Fecha de creación: 2023

// Este código se proporciona bajo la Licencia MIT.
// Para más información, consulta el archivo LICENSE en la raíz del repositorio. 

// Array como parametro por defecto
function sumar_nums($nums = array(1, 2, 3, 4))
{
  return array_sum($nums);
}

echo sumar_nums() . "\n";

// Una instancia por defecto como parametro
class Student
{
}

function recibe_a_class($class = new Student)
{
  echo $class::class;
}

// Imprime student
recibe_a_class();
