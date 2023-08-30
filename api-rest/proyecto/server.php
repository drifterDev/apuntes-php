<?php

// Autor: Mateo Álvarez Murillo
// Fecha de creación: 2023

// Este código se proporciona bajo la Licencia MIT.
// Para más información, consulta el archivo LICENSE en la raíz del repositorio.

$books = [
  1 => [
    'titulo' => 'El imperio final',
    'autor' => 'Brandon Sanderson',
    'genero' => 'Fantasia',
  ],
  2 => [
    'titulo' => 'El bestiario de Axlin',
    'autor' => 'Laura Gallego',
    'genero' => 'Aventura',
  ],
  3 => [
    'titulo' => 'El hijo de neptuno',
    'autor' => 'Rick Riordan',
    'genero' => 'Mitologia',
  ]
];

$allowedResourceTypes = [
  'books',
  'authors',
  'genres'
];

$resourceType = $_GET['type'];
if (!in_array($resourceType, $allowedResourceTypes)) {
  http_response_code(400);
  die;
}

header('Content-type: application/json');
switch (strtoupper($_SERVER['REQUEST_METHOD'])) {
  case 'GET':
    if (empty($resourceId)) {
      echo json_encode($books);
    } else {
      http_response_code(404);
    }
    break;
  case 'POST':
    $json = file_get_contents('php://input');
    $books[] = json_decode($json, true);
    break;
  default:
    break;
}
