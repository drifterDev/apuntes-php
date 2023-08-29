<?php

// Autor: Mateo Álvarez Murillo
// Fecha de creación: 2023

// Este código se proporciona bajo la Licencia MIT.
// Para más información, consulta el archivo LICENSE en la raíz del repositorio.

// Forma 1 de autentificacion (HTTP)
// Se accede http://admin:123@localhost:8000/books
// $user = array_key_exists('PHP_AUTH_USER', $_SERVER) ? $_SERVER['PHP_AUTH_USER'] : '';
// $password = array_key_exists('PHP_AUTH_PW', $_SERVER) ? $_SERVER['PHP_AUTH_PW'] : '';
// if ($user !== 'admin' || $password !== '123') {
//   die;
// }

// Forma 2 de autentificacion (HMAC)
// curl http://localhost:8000/books -H 'X-HASH: 8a9ea23009f67770b7575720fd3f9cd867a2b6fe' -H 'X-UID: 1' -H 'X-TIMESTAMP: 1693336472'
// if (
//   !array_key_exists('HTTP_X_HASH', $_SERVER) ||
//   !array_key_exists('HTTP_X_TIMESTAMP', $_SERVER) ||
//   !array_key_exists('HTTP_X_UID', $_SERVER)
// ) {
//   die;
// }

// list($hash, $uid, $timestamp) = [
//   $_SERVER["HTTP_X_HASH"],
//   $_SERVER["HTTP_X_TIMESTAMP"],
//   $_SERVER["HTTP_X_UID"]
// ];

// $secret = "secreto, no se lo digas a nadie";

// $newHash = sha1($uid . $timestamp . $secret);

// if ($newHash !== $hash) {
//   die;
// }

// Forma 3 de autentificacion (ACCESS TOKENS)
// curl http://localhost:8001 -X 'POST' -H 'X-Client-Id: 1' -H 'X-Secret: secreto'
// 5d0937455b6744.68357201
// curl http://localhost:8000/books -H 'X-Token: 5d0937455b6744.68357201'
header('Content-Type: application/json');

if (!array_key_exists('HTTP_X_TOKEN', $_SERVER)) {
  die;
}

$url = 'http://localhost:8001';

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
  "X-Token: {$_SERVER['HTTP_X_TOKEN']}",
]);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$ret = curl_exec($ch);

if (curl_errno($ch) != 0) {
  die(curl_error($ch));
}

if ($ret !== 'true') {
  http_response_code(403);
  die;
}

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
