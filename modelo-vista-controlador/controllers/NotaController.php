<?php

namespace Controllers;

use Models\Nota;

class NotaController
{
  public function listar()
  {
    $nota = new Nota();
    $nota->setNombre("Nota #1");
    $nota->setContenido("Contenido de nota #1");
    require_once 'views/nota/listar.php';
  }

  public function crear()
  {
  }

  public function borrar()
  {
  }
}
