<?php

// Autor: Mateo Álvarez Murillo
// Fecha de creación: 2023

// Este código se proporciona bajo la Licencia MIT.
// Para más información, consulta el archivo LICENSE en la raíz del repositorio. 

namespace StudentsMatriculados;

class Student
{
  protected $name;
  protected $price;
  protected $date;
  protected $career;

  public function __construct($name, $price, $date, $career)
  {
    $this->name = $name;
    $this->price = $price;
    $this->date = $date;
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

  public function getPrice()
  {
    return $this->price;
  }

  public function setPrice($price)
  {
    return $this->price = $price;
  }

  public function getDate()
  {
    return $this->date;
  }

  public function setDate($date)
  {
    return $this->date = $date;
  }

  public function getCareer()
  {
    return $this->career;
  }

  public function setCareer($career)
  {
    return $this->career = $career;
  }
}
