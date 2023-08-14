<?php

// Autor: Mateo Álvarez Murillo
// Fecha de creación: 2023

// Este código se proporciona bajo la Licencia MIT.
// Para más información, consulta el archivo LICENSE en la raíz del repositorio.

abstract class Base
{
  protected $name;

  private function getClassName()
  {
    return get_called_class();
  }

  public function login()
  {
    return "Mi nombre es $this->name desde la clase {$this->getClassName()}";
  }
}

class Admin extends Base
{
  public function __construct($name)
  {
    $this->name = $name;
  }
}

class User2 extends Base
{
  public function __construct($name)
  {
    $this->name = $name;
  }
}

class Guest extends Base
{
  protected $name = 'Invitado';
}

$guest = new Guest();
echo $guest->login();
echo "\n";
$guest = new User2('Italo');
echo $guest->login();
echo "\n";
$guest = new Admin('Lynda');
echo $guest->login();
