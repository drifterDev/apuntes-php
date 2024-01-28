<?php

require 'vendor/autoload.php';

header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Content-Type");

$model = $_GET['model'];
$id = $_GET['id'] ?? null;
$controller = 'App\\Controllers\\' . ucfirst($model) . 'Controller';
$tmp = new $controller();

switch (strtoupper($_SERVER['REQUEST_METHOD'])) {
  case 'GET':
    echo $tmp->get($id);
    break;
  case 'POST':
    $data = json_decode(file_get_contents('php://input'), true);
    echo $tmp->post($data);
    break;
  case 'PUT':
    $data = json_decode(file_get_contents('php://input'), true);
    echo $tmp->put($id, $data);
    break;
  case 'DELETE':
    echo $tmp->delete($id);
    break;
  default:
    break;
}
