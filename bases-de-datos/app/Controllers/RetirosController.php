<?php

// Autor: Mateo Álvarez Murillo
// Fecha de creación: 2023

// Este código se proporciona bajo la Licencia MIT.
// Para más información, consulta el archivo LICENSE en la raíz del repositorio. 

namespace App\Controllers;

use Database\PDO\Connection;

class RetirosController
{
  private $connection;
  public function __construct()
  {
    $this->connection = Connection::getInstance()->get_database_instance();
  }
  /**
   * Muestra una lista de este recurso
   */
  public function index()
  {
    $stmt = $this->connection->prepare("SELECT cantidad, descripcion FROM retiros");
    $stmt->execute();
    $result = $stmt->fetchAll();
    foreach ($result as $r) {
      echo "Gastaste " . $r["cantidad"] . " COP en: " . $r["descripcion"] . "\n";
    }
  }

  /**
   * Muestra un formulario para crear un nuevo recurso
   */
  public function create()
  {
  }

  /**
   * Guarda un nuevo recurso en la base de datos
   */
  public function store($data)
  {
    $stmt = $this->connection->prepare("INSERT INTO retiros (metodo_pago, tipo, fecha, cantidad, descripcion) VALUES
    (:metodo_pago, :tipo, :fecha, :cantidad, :descripcion);");
    $stmt->bindValue(":metodo_pago", $data["metodo_pago"]);
    $stmt->bindValue(":tipo", $data["tipo"]);
    $stmt->bindValue(":fecha", $data["fecha"]);
    $stmt->bindValue(":cantidad", $data["cantidad"]);
    $stmt->bindValue(":descripcion", $data["descripcion"]);
    $stmt->execute();
  }

  /**
   * Muestra un único recurso especificado
   */
  public function show($id)
  {
    $stmt = $this->connection->prepare("SELECT * FROM retiros WHERE id=:id");
    $stmt->execute([":id" => $id]);
    $result = $stmt->fetch(\PDO::FETCH_ASSOC);
    echo "El registro con id $id dice que te gastaste {$result['amount']} COP en {$result['description']}";
  }

  /**
   * Muestra el formulario para editar un recurso
   */
  public function edit()
  {
  }

  /**
   * Actualiza un recurso específico en la base de datos
   */
  public function update($id, $data)
  {
    $stmt = $this->connection->prepare("UPDATE retiros SET
    metodo_pago=:metodo_pago,
    tipo=:tipo,
    fecha=:fecha,
    cantidad=:cantidad,
    descripcion=:descripcion WHERE id=:id;");
    $stmt->execute([
      ":id" => $id,
      ":metodo_pago" => $data["metodo_pago"],
      ":tipo" => $data["tipo"],
      ":fecha" => $data["fecha"],
      ":cantidad" => $data["cantidad"],
      ":descripcion" => $data["descripcion"]
    ]);
  }

  /**
   * Elimina un recurso específico de la base de datos
   */
  public function destroy($id)
  {
    $stmt = $this->connection->prepare("DELETE FROM retiros WHERE id=:id");
    $stmt->execute([":id" => $id]);
  }
}
