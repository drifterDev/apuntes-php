<?php

use App\Controllers\IngresosController;
use App\Controllers\RetirosController;
use Router\RouterHandler;

require("../vendor/autoload.php");

// Obtener URL
$page = $_GET["page"] ?? "";
$page = explode("/", $page);

$resource = $page[0] == "" ? "/" : $page[0];
$id = $page[1] ?? null;

// Instancia del router
$router = new RouterHandler();

switch ($resource) {
  case '/':
    echo "Estas en la front page";
    break;
  case 'ingresos':
    $method = $_POST["method"] ?? "get";
    $router->set_method($method);
    $router->set_data($_POST);
    $router->route(IngresosController::class, $id);
    break;
  case 'retiros':
    $method = $_POST["method"] ?? "get";
    $router->set_method($method);
    $router->set_data($_POST);
    $router->route(RetirosController::class, $id);
    break;
  default:
    echo "404 not found";
    break;
}
