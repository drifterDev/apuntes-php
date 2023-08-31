<?php

namespace Models;

class Nota extends ModeloBase
{
  public $nombre;
  public $contenido;

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
