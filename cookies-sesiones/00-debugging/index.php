<?php

// Autor: Mateo Álvarez Murillo
// Fecha de creación: 2023

// Este código se proporciona bajo la Licencia MIT.
// Para más información, consulta el archivo LICENSE en la raíz del repositorio. 

require('vendor/autoload.php');

class School
{
  public $name;
  function __construct($name)
  {
    $this->name = $name;
  }
}

class Student
{
  public $name;
  public $age;
  public $school;
  function __construct($name, $age, $school)
  {
    $this->name = $name;
    $this->age = $age;
    $this->school = new School($school);
  }
}

$student1 = new Student("Mateo", 19, "Universidad Nacional");
$student2 = new Student("Kevin", 19, "Universidad de Antioquia");

$persons = array(
  "students" => [$student1, $student2],
  "schools" => [
    $student1->school->name,
    $student2->school->name,
  ],
  "ages" => $student1->age + $student2->age,
);

// echo '<pre>';
// var_dump($persons);
// echo '</pre>';

// La funcion dd es mucho más legible al debuggear
dd($persons);
