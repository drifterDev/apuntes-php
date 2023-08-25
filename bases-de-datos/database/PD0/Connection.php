<?php

// Autor: Mateo Álvarez Murillo
// Fecha de creación: 2023

// Este código se proporciona bajo la Licencia MIT.
// Para más información, consulta el archivo LICENSE en la raíz del repositorio. 

$server = "localhost";
$database = "";
$username = "";
$password = "";

$connection = new PDO("mysql:host=$server;dbname=$database", $username, $password);

$setname = $connection->prepare("SET NAMES 'utf8'");
$setname->execute();

var_dump($setname);
