<?php

// Autor: Mateo Álvarez Murillo
// Fecha de creación: 2023

// Este código se proporciona bajo la Licencia MIT.
// Para más información, consulta el archivo LICENSE en la raíz del repositorio. 

namespace App\Classes;

use App\Traits\Person;

class Student
{
  use Person;
  public function saludar()
  {
    return "Hola, soy estudiante";
  }

  public function despedir()
  {
    return "Adios, soy estudiante";
  }
}
