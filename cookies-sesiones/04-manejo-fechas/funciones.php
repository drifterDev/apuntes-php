<?php

// Autor: Mateo Álvarez Murillo
// Fecha de creación: 2023

// Este código se proporciona bajo la Licencia MIT.
// Para más información, consulta el archivo LICENSE en la raíz del repositorio. 

// Establecer la zona horaria
date_default_timezone_set("America/Bogota");

// Obtener la fecha actual
$now = date("Y-m-d H:i:s");
echo $now . "\n";
// Con objetos
// $now = date_create();

// strtotime
// Convierte de una frase en ingles a una fecha unix
echo strtotime($now);
echo "\n";
echo strtotime("17 April 2022");
echo "\n";
echo strtotime("+1 week");
echo "\n";
echo strtotime("next Monday");
echo "\n";
echo strtotime("last Wednesday");

echo "\n";
$unix_time = strtotime("15 April 2023");
echo date("Y-m-d H:i:s", $unix_time);

// Fechas inmutables
$date_immutable = new DateTimeImmutable();
