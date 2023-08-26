<?php

// Autor: Mateo Álvarez Murillo
// Fecha de creación: 2023

// Este código se proporciona bajo la Licencia MIT.
// Para más información, consulta el archivo LICENSE en la raíz del repositorio. 

namespace App\Controllers;

use Database\MySQLi\Connection;

class IngresosController
{
  /**
   * Muestra una lista de este recurso
   */
  public function index()
  {
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
    $connection = Connection::getInstance()->get_database_instance();
    // Se usa stmt por convencion no es obligatorio
    $stmt = $connection->prepare("INSERT INTO ingresos (metodo_pago, tipo, fecha, cantidad, descripcion) VALUES(?,?,?,?,?);");
    // Ver la documentacion para el primer parametro de bind_param
    // Tambien estamos pasando solo una referencia de las variables por eso las podemos definir despues
    $stmt->bind_param("iisds", $metodo_pago, $tipo, $fecha, $cantidad, $descripcion);

    $metodo_pago = $data['metodo_pago'];
    $tipo = $data['tipo'];
    $fecha = $data['fecha'];
    $cantidad = $data['cantidad'];
    $descripcion = $data['descripcion'];

    $stmt->execute();
    echo "Se ha insertado {$stmt->affected_rows} filas en la base de datos";
  }

  /**
   * Muestra un único recurso especificado
   */
  public function show()
  {
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
