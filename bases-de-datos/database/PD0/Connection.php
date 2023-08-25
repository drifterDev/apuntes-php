<?php

// Autor: Mateo Álvarez Murillo
// Fecha de creación: 2023

// Este código se proporciona bajo la Licencia MIT.
// Para más información, consulta el archivo LICENSE en la raíz del repositorio. 

namespace Database\PDO;

class Connection
{
  private static $instance;
  private $connection;

  private function __construct()
  {
    $this->make_connection();
  }

  private static function get_instance()
  {
    if (!self::$instance instanceof self) {
      self::$instance = new self();
    }
    return self::$instance;
  }

  private function make_connection()
  {
    $server = "";
    $database = "";
    $username = "";
    $password = "";

    $connection = new \PDO("mysql:host=$server;dbname=$database", $username, $password);

    $setname = $connection->prepare("SET NAMES 'utf8'");
    $setname->execute();

    $this->connection = $connection;
  }

  public function get_database_instance()
  {
    return $this->connection;
  }
}
