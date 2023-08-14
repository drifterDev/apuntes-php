
<?php

// Autor: Mateo Álvarez Murillo
// Fecha de creación: 2023

// Este código se proporciona bajo la Licencia MIT.
// Para más información, consulta el archivo LICENSE en la raíz del repositorio. 

#Valores
//Hace referencia a que nosotros colocamos directamente una variable($name) esperando que eso se cumpla
function greet($name)
{
  return "Hola, $name";
}

echo greet('Danny');
echo "\n";

#Referencias
//Ademas de hacer un cambio interno con la función queremos que este cambio afecte al elemento que tenemos afuera.
$course = 'PHP';
function path(&$course)
{
  $course = 'Laravel';
  echo $course; //Laravel
}

path($course);
echo "\n";
echo $course; //Laravel
echo "\n";

#Predeterminado
//Asignamos de manera fija un elemento o un valor y podemos alterar el valor con un parametro
function greet1($name = 'Danny')
{
  return "Hola, $name";
}

echo greet1();
echo "\n";
echo greet1('Abel');
