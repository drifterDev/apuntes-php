<?php

// Autor: Mateo Álvarez Murillo
// Fecha de creación: 2023

// Este código se proporciona bajo la Licencia MIT.
// Para más información, consulta el archivo LICENSE en la raíz del repositorio. 

$segundos = readline("Ingresa los segundos: ");
$horas = (int)($segundos / 3600);
$segundos %= 3600;
$minutos = (int)($segundos / 60);
$segundos %= 60;
echo "Horas: $horas, Minutos: $minutos, Segundos: $segundos\n\n";

$horas = readline("Ingresa las horas: ");
$minutos = readline("Ingresa las minutos: ");
$segundos = readline("Ingresa las segundos: ");
$segundos += ($horas * 3600);
$segundos += ($minutos * 60);
echo "Segundos totales: $segundos";
