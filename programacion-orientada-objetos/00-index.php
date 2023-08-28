<?php

// Autor: Mateo Álvarez Murillo
// Fecha de creación: 2023

// Este código se proporciona bajo la Licencia MIT.
// Para más información, consulta el archivo LICENSE en la raíz del repositorio.

class User
{
  public $type;
}

class Student
{
  public function greet()
  {
    echo "Buenos días!";
  }
}

$usuario = new User;
$estudiante = new Student;
$usuario->type = "Admin";
echo $usuario->type;
echo "\n";
$estudiante->greet();
