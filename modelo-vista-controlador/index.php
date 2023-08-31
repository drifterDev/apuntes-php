<!-- Autor: Mateo Álvarez Murillo
Fecha de creación: 2023

Este código se proporciona bajo la Licencia MIT.
Para más información, consulta el archivo LICENSE en la raíz del repositorio. -->

<h1>Probando el patron de diseño MVC</h1>
<?php

require __DIR__ . "/vendor/autoload.php";

if (isset($_GET['controller'])) {
  $class = 'Controllers\\' . $_GET['controller'] . 'Controller';
  if (class_exists($class)) {
    $controllador = new $class();
    if (isset($_GET['action']) && method_exists($controllador, $_GET['action'])) {
      $action = $_GET['action'];
      $controllador->$action();
    } else {
      echo "Error 404 not found";
    }
  } else {
    echo "Error 404 not found";
  }
} else {
  echo "Error 404 not found";
}
