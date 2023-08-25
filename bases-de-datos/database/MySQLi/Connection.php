<?php

// Autor: Mateo Álvarez Murillo
// Fecha de creación: 2023

// Este código se proporciona bajo la Licencia MIT.
// Para más información, consulta el archivo LICENSE en la raíz del repositorio. 

$server = "localhost";
$database = "";
$username = "";
$password = "";

// Forma procedural
// $mysqli = mysqli_connect($server, $username, $password, $database);
// Comprobar conexión
// if (!$mysqli) {
//   die("Falló la conexión: " . mysqli_connect_error());
// }

// Forma orientada a objetos
$mysqli = new mysqli($server, $username, $password, $database);
// Comprobar conexión
if ($mysqli->connect_errno)
  die("Falló la conexión: {$mysqli->connect_error}");

// Utilizar cualquier caracter en consultas
$setnames = $mysqli->prepare("SET NAMES 'utf8'");
$setnames->execute();

var_dump($setnames);
