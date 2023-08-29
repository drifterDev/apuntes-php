<?php

// Autor: Mateo Álvarez Murillo
// Fecha de creación: 2023

// Este código se proporciona bajo la Licencia MIT.
// Para más información, consulta el archivo LICENSE en la raíz del repositorio.

$books = [
  1 => [
    'titulo' => 'El imperio final',
    'id_author' => 1,
    'id_genero' => 1,
  ],
  2 => [
    'titulo' => 'El bestiario de Axlin',
    'id_author' => 2,
    'id_genero' => 2,
  ],
  3 => [
    'titulo' => 'El hijo de neptuno',
    'id_author' => 3,
    'id_genero' => 1,
  ]
];

// Definir los recursos disponibles
$allowedResourceTypes = [
  'books',
  'authors',
  'genres'
];

// Validación del recurso
$resourceType = $_GET['type'];

if (!in_array($resourceType, $allowedResourceTypes)) {
  die;
}

// Lo siguiente son buenas practicas
header('Content-type: application/json');

// Obtenemos el id del recurso
$resourceId = array_key_exists('id', $_GET) ? $_GET['id'] : '';

// Generamos la respuesta dependiendo de la petición
switch (strtoupper($_SERVER['REQUEST_METHOD'])) {
  case 'GET':
    if (empty($resourceId)) {
      echo json_encode($books);
    } else if (array_key_exists($resourceId, $books)) {
      echo json_encode($books[$resourceId]);
    }
    break;
  case 'POST':
    // para acceder a lo que nos envia el usuario
    $json = file_get_contents('php://input');
    $books[] = json_decode($json, true);
    // echo array_keys($books)[count($books) - 1]; Devuelve el nuevo id
    echo json_encode($books);
    break;
  case 'PUT':
    // Valida que el recurso exista
    if (!empty($resourceId) && !in_array($resourceId, $books)) {
      $json = file_get_contents('php://input');
      $books[$resourceId] = json_decode($json, true);
      // Retorna el elemento editado
      echo json_encode($books[$resourceId]);
    }
    break;
  case 'DELETE':
    // Valida que el recurso exista
    if (!empty($resourceId) && !in_array($resourceId, $books)) {
      // Se elimina el recurso
      unset($books[$resourceId]);
      echo json_encode($books);
    }
    break;

  default:
    # code...
    break;
}
