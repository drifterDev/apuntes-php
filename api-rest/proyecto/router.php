<?php

// Autor: Mateo Álvarez Murillo
// Fecha de creación: 2023

// Este código se proporciona bajo la Licencia MIT.
// Para más información, consulta el archivo LICENSE en la raíz del repositorio.

$matches = [];
if (preg_match('/\/([^\/]+)\/([^\/]+)/', $_SERVER["REQUEST_URI"], $matches)) {
  $_GET['type'] = $matches[1];
  $_GET['id'] = $matches[2];
  error_log(print_r($matches, 1));
  require 'server.php';
} else if (preg_match('/\/([^\/]+)\/?/', $_SERVER["REQUEST_URI"], $matches)) {
  $_GET['type'] = $matches[1];
  error_log(print_r($matches, 1));
  require 'server.php';
} else {
  error_log('No matches');
  http_response_code(404);
}
