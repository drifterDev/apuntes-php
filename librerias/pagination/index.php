<?php

// Autor: Mateo Álvarez Murillo
// Fecha de creación: 2023

// Este código se proporciona bajo la Licencia MIT.
// Para más información, consulta el archivo LICENSE en la raíz del repositorio.

// require_once 'path/to/Zebra_Pagination.php';

namespace Pages;

use Zebra_Pagination;

require __DIR__ . '\..\vendor\autoload.php';

$db = new \mysqli("localhost", "root", "", "dbs_php_mvc");
$db->query("SET NAMES 'utf8';");

$consulta = $db->query("SELECT * FROM notas;");
$numeroElementos = $consulta->num_rows;
$numeroElementosPagina = 2;
// var_dump($numeroElementos);

$pagination = new Zebra_Pagination();
// Numero elementos a paginar
$pagination->records($numeroElementos);


// numero de elementos por pagina
$pagination->records_per_page($numeroElementosPagina);

$page = $pagination->get_page();
$inicio = ($page - 1) * $numeroElementosPagina;
$notas = $db->query("SELECT * FROM notas LIMIT $inicio,$numeroElementosPagina;");

while ($nota = $notas->fetch_object()) {
  echo "<h1>{$nota->titulo}</h1>";
  echo "<p>{$nota->descripcion}</p><hr/>";
}

$pagination->render();
