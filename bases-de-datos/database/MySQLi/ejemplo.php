<?php

// Autor: Mateo Álvarez Murillo
// Fecha de creación: 2023

// Este código se proporciona bajo la Licencia MIT.
// Para más información, consulta el archivo LICENSE en la raíz del repositorio. 


$server = "";
$database = "";
$username = "";
$password = "";

// Forma procedural
// $mysqli = mysqli_connect($server, $username, $password, $database);
// Comprobar conexión
// if (!$mysqli) {
//   die("Falló la conexión: " . mysqli_connect_error());
// }
// para hacer queries de esta forma es:
// mysqli_query($mysqli, "SET NAMES 'utf8'");
// $query = mysqli_query($mysqli, "SELECT * FROM ingresos");
// while ($nota = mysqli_fetch_assoc($query)) {
//   var_dump($nota);
// }
// $insert=mysqli_query($mysqli, "INSERT INTO retiros VALUES (...);");
// var_dump($insert);


// Forma orientada a objetos
$mysqli = new mysqli($server, $username, $password, $database);
// Comprobar conexión
if ($mysqli->connect_errno)
  die("Falló la conexión: {$mysqli->connect_error}");

// Utilizar cualquier caracter en consultas
$setnames = $mysqli->prepare("SET NAMES 'utf8'");
$setnames->execute();

var_dump($setnames);
