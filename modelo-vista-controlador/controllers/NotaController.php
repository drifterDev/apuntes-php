<?php

// Autor: Mateo Álvarez Murillo
// Fecha de creación: 2023

// Este código se proporciona bajo la Licencia MIT.
// Para más información, consulta el archivo LICENSE en la raíz del repositorio.

namespace Controllers;

use Models\Nota;

class NotaController
{
  public function listar()
  {
    $nota = new Nota();
    $nota->setNombre("Nota #1");
    $nota->setContenido("Contenido de nota #1");

    $notas = $nota->conseguirTodos('notas');
    require_once 'views/nota/listar.php';
  }

  public function crear()
  {
    $nota = new Nota();
    $nota->guardar(1, "Nota especial para pruebas", "Descripcion de la nota especial para pruebasa");
    header("Location:index.php?controller=Nota&action=listar");
  }

  public function borrar()
  {
  }
}
