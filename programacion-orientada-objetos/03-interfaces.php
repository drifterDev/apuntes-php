<?php

// Autor: Mateo Álvarez Murillo
// Fecha de creación: 2023

// Este código se proporciona bajo la Licencia MIT.
// Para más información, consulta el archivo LICENSE en la raíz del repositorio.

interface Search
{
  public function all();
}

class User implements Search
{
  public function all()
  {
    return "Obteniendo a los Users, XML";
  }
}

class Post implements Search
{
  public function all()
  {
    return "Obteniendo a los Users, JSON";
  }
}

$user = new User();
echo $user->all();
echo "\n";
$user = new Post();
echo $user->all();
