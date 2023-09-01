<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bases de datos</title>
  <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>
  <h1 class="w-full p-5 bg-blue-100 text-3xl text-blue-500">Aprendiendo MySQL con PHP</h1>
  <div class="p-5 flex flex-col items-center">

<?php

// Prender el server xampp e ir a  bases.test
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
?>

</div>
</body>
</html>