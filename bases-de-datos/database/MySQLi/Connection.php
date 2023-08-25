<?php

// Autor: Mateo Álvarez Murillo
// Fecha de creación: 2023

// Este código se proporciona bajo la Licencia MIT.
// Para más información, consulta el archivo LICENSE en la raíz del repositorio. 

namespace Database\MySQLi;

class Connection
{
  private $connection;
  private static $instance;

  private function __construct()
  {
    $this->make_connection();
  }

  public static function getInstance()
  {
    if (!self::$instance instanceof self)
      self::$instance = new self();
    return self::$instance;
  }

  private function  make_connection()
  {
    $server = "";
    $database = "";
    $username = "";
    $password = "";

    $mysqli = new \mysqli($server, $username, $password, $database);

    if ($mysqli->connect_errno)
      die("Falló la conexión: {$mysqli->connect_error}");

    $setnames = $mysqli->prepare("SET NAMES 'utf8'");
    $setnames->execute();

    $this->connection = $mysqli;
  }

  public function get_database_instance()
  {
    return $this->connection;
  }
}
