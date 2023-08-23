<?php

// Autor: Mateo Álvarez Murillo
// Fecha de creación: 2023

// Este código se proporciona bajo la Licencia MIT.
// Para más información, consulta el archivo LICENSE en la raíz del repositorio. 

// Diferencia de tiempo
$today = new DateTime();
$birthday = new DateTime("2004-08-15");
$diferencia = $birthday->diff($today);
echo $diferencia->format("%y años con %d dias");

// Crear desde un formato dado
$date = DateTime::createFromFormat("l j F Y", "Sunday 17 April 2022");
echo "\n" . $date->format("Y-m-d H:i:s");

// Modificar una fecha
$date = new DateTime();
$date->modify("-1 year +2 months +15 days");
echo "\n" . $date->format("Y-m-d");
