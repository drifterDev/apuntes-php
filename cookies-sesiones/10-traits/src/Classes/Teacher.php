<?php

// Autor: Mateo Álvarez Murillo
// Fecha de creación: 2023

// Este código se proporciona bajo la Licencia MIT.
// Para más información, consulta el archivo LICENSE en la raíz del repositorio. 

namespace App\Classes;

use App\Traits\Person;

class Teacher
{
  use Person;
  public function bienvenida()
  {
    return "Hola, soy profesor";
  }

  public function despedida()
  {
    return "Adios, soy profesor";
  }
}
