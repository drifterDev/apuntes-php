<?php

// Autor: Mateo Álvarez Murillo
// Fecha de creación: 2023

// Este código se proporciona bajo la Licencia MIT.
// Para más información, consulta el archivo LICENSE en la raíz del repositorio. 

use App\Classes\StudentMatriculado;
use App\Classes\StudentNoMatriculado;

function createStudent()
{
  $student1 = new StudentNoMatriculado("Mateo", 19, "Informatica");
  $student2 = new StudentMatriculado("Daniel", 489321, "2023-08-19", "Mecanica");

  echo "El estudiante " . $student1->getName() . " estaba estudiando " . $student1->getCareer() . "\n";
  echo "El estudiante " . $student2->getName() . " esta estudiando " . $student2->getCareer() . " porque pago la matricula en " . $student2->getDate();
}
