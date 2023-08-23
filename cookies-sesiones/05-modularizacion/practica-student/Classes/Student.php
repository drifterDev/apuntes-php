<?php

// Autor: Mateo Álvarez Murillo
// Fecha de creación: 2023

// Este código se proporciona bajo la Licencia MIT.
// Para más información, consulta el archivo LICENSE en la raíz del repositorio. 

class Student
{
  protected $name;
  protected $age;
  protected $career;

  function __construct($name, $age, $career)
  {
    $this->name = $name;
    $this->age = $age;
    $this->career = $career;
  }

  //creando los gettes y setters
  public function getName()
  {
    return $this->name;
  }

  public function setName($name)
  {
    return $this->name = $name;
  }

  public function getAge()
  {
    return $this->age;
  }

  public function setAge($age)
  {
    return $this->age = $age;
  }

  public function getCareer()
  {
    return $this->career;
  }

  public function setCareer($career)
  {
    return $this->career = $career;
  }

  public function matricularEstudiante()
  {
    echo "Estudiante matriculado";
  }
}
