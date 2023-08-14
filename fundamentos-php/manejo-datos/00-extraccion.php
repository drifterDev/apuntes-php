<?php

// Autor: Mateo Álvarez Murillo
// Fecha de creación: 2023

// Este código se proporciona bajo la Licencia MIT.
// Para más información, consulta el archivo LICENSE en la raíz del repositorio. 


$data = "email@email.com";
echo $data[5];
echo "\n";

$data = 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat, quasi.';
$info = substr($data, 0, 10);
echo "$info ...[Ver mas]";
echo "\n";

$data = "   frase con espacios   ";
// // Quita los espacios del final y al inicio
echo trim($data);
echo "\n";
// // Quita los espacios del inicio
echo ltrim($data);
echo "\n";
// // Quita los espacios del final
echo rtrim($data);
echo "\n";
