<?php

// Autor: Mateo Álvarez Murillo
// Fecha de creación: 2023

// Este código se proporciona bajo la Licencia MIT.
// Para más información, consulta el archivo LICENSE en la raíz del repositorio.

use App\Http\Response;

if (!function_exists('view')) {
  function view($view)
  {
    return new Response($view);
  }
}

if (!function_exists('viewPath')) {
  function viewPath($view)
  {
    return __DIR__ . "/../views/$view.php";
  }
}
