<?php

// Autor: Mateo Álvarez Murillo
// Fecha de creación: 2023

// Este código se proporciona bajo la Licencia MIT.
// Para más información, consulta el archivo LICENSE en la raíz del repositorio.

namespace Controllers;

use Models\Usuario;

class UsuarioController{
  public function mostrarTodos(){
    require_once '../models/Usuario.php';
    $usuario = new Usuario();
    $usuarios=$usuario->conseguirTodos();
    require_once '../views/usuario/mostrar-todos.php';
  }

  public function crearUsuario(){

  }
}