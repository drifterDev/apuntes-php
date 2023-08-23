<?php

// Autor: Mateo Álvarez Murillo
// Fecha de creación: 2023

// Este código se proporciona bajo la Licencia MIT.
// Para más información, consulta el archivo LICENSE en la raíz del repositorio. 

// Estructurada
$interval = date_interval_create_from_date_string("5 days");
$date = date_create();
date_add($date, $interval);
echo date_format($date, "Y-m-d");

echo "\n";

// Orientada a objetos
$interval = DateInterval::createFromDateString("5 days");
$date = new DateTime();
$date->add($interval);
echo $date->format("Y-m-d");
