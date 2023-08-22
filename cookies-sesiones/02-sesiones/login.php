<?php

// Autor: Mateo Álvarez Murillo
// Fecha de creación: 2023

// Este código se proporciona bajo la Licencia MIT.
// Para más información, consulta el archivo LICENSE en la raíz del repositorio. 

session_start();

$users = [
  array(
    "username" => "drifter",
    "email" => "drifter@c.c"
  ),

  array(
    "username" => "draft",
    "email" => "draft@c.c"
  ),
];

$user = $_GET["user"] ?? "";
$_SESSION["id"] = $user;
$_SESSION["username"] = $users[$user]["username"];
$_SESSION["email"] = $users[$user]["email"];
