<?php

// Autor: Mateo Álvarez Murillo
// Fecha de creación: 2023

// Este código se proporciona bajo la Licencia MIT.
// Para más información, consulta el archivo LICENSE en la raíz del repositorio.

// echo file_get_contents("https://api.thecatapi.com/v1/images/search");

$json= file_get_contents("https://api.thecatapi.com/v1/images/search");
$data=json_decode($json, true)[0];

var_dump($data["id"]);
var_dump($data["url"]);