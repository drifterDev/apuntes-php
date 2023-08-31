<?php

// Autor: Mateo Álvarez Murillo
// Fecha de creación: 2023

// Este código se proporciona bajo la Licencia MIT.
// Para más información, consulta el archivo LICENSE en la raíz del repositorio.

namespace Models;

use Config\Database;

class ModeloBase
{
  public $db;
  public function __construct()
  {
    $this->db = Database::conectar();
  }

  public function conseguirTodos($tabla)
  {
    $query = $this->db->query("SELECT * FROM $tabla");
    return $query;
  }
}
