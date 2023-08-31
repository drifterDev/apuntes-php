<?php

// Autor: Mateo Álvarez Murillo
// Fecha de creación: 2023

// Este código se proporciona bajo la Licencia MIT.
// Para más información, consulta el archivo LICENSE en la raíz del repositorio.

namespace Models;

class Nota extends ModeloBase
{
  public $nombre;
  public $contenido;

  public function __construct()
  {
    parent::__construct();
  }

  public function getNombre()
  {
    return $this->nombre;
  }

  public function setNombre($nombre)
  {
    $this->nombre = $nombre;
  }

  public function getContenido()
  {
    return $this->contenido;
  }

  public function setContenido($contenido)
  {
    $this->contenido = $contenido;
  }
}
