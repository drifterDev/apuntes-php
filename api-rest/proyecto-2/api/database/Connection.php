<?php

namespace Database;

use Dotenv\Dotenv;

class Connection
{
  private $connection;
  private static $instance;

  private function __construct()
  {
    $dotenv = Dotenv::createImmutable(__DIR__ . '/..');
    $dotenv->load();
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
    $server = $_ENV['DB_HOST'];
    $database = $_ENV['DB_NAME'];
    $username = $_ENV['DB_USER'];
    $password = $_ENV['DB_PASS'];

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
