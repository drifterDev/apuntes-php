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
    // FETCH ALL
    // $stmt = $this->connection->prepare("SELECT * FROM retiros");
    // $stmt->execute();

    // // fetchAll nos devuelve un array mixto
    // $result = $stmt->fetchAll();

    // foreach ($result as $r) {
    //   echo "Gastaste " . $r["cantidad"] . " COP es: " . $r["descripcion"] . "\n";
    // }

    // FETCH COLUMN
    $stmt = $this->connection->prepare("SELECT cantidad, descripcion FROM retiros");
    $stmt->execute();
    // Consultar la documentacion para el parametro de fetchall
    // Selecciona la columna indice 0
    $result = $stmt->fetchAll(\PDO::FETCH_COLUMN, 0);
    foreach ($result as $r) {
      echo "Gastaste $r COP\n";
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
    // Forma #1 sin bindparams
    // $stmt = $connection->prepare("INSERT INTO retiros (metodo_pago, tipo, fecha, cantidad, descripcion) VALUES
    //   (:metodo_pago, :tipo, :fecha, :cantidad, :descripcion);");
    // // Para usar los placeholders se pone así, pero lo hacemos un poco más sencillo en el index.php
    // // $stmt->execute([
    // //   ":metodo_pago"=>$data["metodo_pago"],
    // //   ...
    // // ]);
    // $stmt->execute($data);

    // Forma #2 con bindparams
    // $stmt = $connection->prepare("INSERT INTO retiros (metodo_pago, tipo, fecha, cantidad, descripcion) VALUES
    // (:metodo_pago, :tipo, :fecha, :cantidad, :descripcion);");
    // // esto para evitar sql injection
    // $stmt->bindParam(":metodo_pago", $data["metodo_pago"]);
    // $stmt->bindParam(":tipo", $data["tipo"]);
    // $stmt->bindParam(":fecha", $data["fecha"]);
    // $stmt->bindParam(":cantidad", $data["cantidad"]);
    // $stmt->bindParam(":descripcion", $data["descripcion"]);
    // $stmt->execute();

    // Forma #3 con bindvalue
    $stmt = $this->connection->prepare("INSERT INTO retiros (metodo_pago, tipo, fecha, cantidad, descripcion) VALUES
    (:metodo_pago, :tipo, :fecha, :cantidad, :descripcion);");
    // esto para evitar sql injection
    $stmt->bindValue(":metodo_pago", $data["metodo_pago"]);
    $stmt->bindValue(":tipo", $data["tipo"]);
    $stmt->bindValue(":fecha", $data["fecha"]);
    $stmt->bindValue(":cantidad", $data["cantidad"]);
    $stmt->bindValue(":descripcion", $data["descripcion"]);

    // Esto no cambia nada gracias a bindvalue
    $data["descripcion"] = "Se cambio el valor";

    $stmt->execute();
  }

  /**
   * Muestra un único recurso especificado
   */
  public function show($id)
  {
    $stmt = $this->connection->prepare("SELECT * FROM retiros WHERE id=:id");
    $stmt->execute([":id" => $id]);
    // Con fetch se muestra una sola fila
    // $result = $stmt->fetch();
    // var_dump($result);
    // echo "El registro con id $id dice que te gastaste {$result['cantidad']} COP en {$result['descripcion']}\n";

    // Para evitar los valores duplicados
    $result = $stmt->fetch(\PDO::FETCH_ASSOC);
    var_dump($result);
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
  public function update()
  {
  }

  /**
   * Elimina un recurso específico de la base de datos
   */
  public function destroy()
  {
  }
}


// index: muestra la lista de todos los recursos.
// create: muestra un formulario para ingresar un nuevo recurso. (luego manda a llamar al método store).
// store: registra dentro de la base de datos el nuevo recurso.
// show: muestra un recurso específico.
// edit: muestra un formulario para editar un recurso. (luego manda a llamar al método update).
// update: actualiza el recurso dentro de la base de datos.
// destroy: elimina un recurso.
