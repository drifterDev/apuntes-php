<?php

// Autor: Mateo Álvarez Murillo
// Fecha de creación: 2023

// Este código se proporciona bajo la Licencia MIT.
// Para más información, consulta el archivo LICENSE en la raíz del repositorio.

namespace Controllers;

use Models\Usuario;

class UsuarioController
{
  public function listar()
  {
    require_once 'models/Usuario.php';
    $usuario = new Usuario();
    $usuarios = $usuario->conseguirTodos('usuarios');
    require_once 'views/usuarios/listar.php';
  }

  public function crear()
  {
    require_once 'views/usuarios/crear.php';
  }
}
