<?php

// Autor: Mateo Álvarez Murillo
// Fecha de creación: 2023

// Este código se proporciona bajo la Licencia MIT.
// Para más información, consulta el archivo LICENSE en la raíz del repositorio.

namespace Config;

use mysqli;

class Database
{
  public static function conectar()
  {
    $connection = new mysqli("localhost", "root", "", "dbs_php_mvc");
    $connection->query("SET NAMES 'utf8';");
    return $connection;
  }
}
