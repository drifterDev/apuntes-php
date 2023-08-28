<?php

// Autor: Mateo Álvarez Murillo
// Fecha de creación: 2023

// Este código se proporciona bajo la Licencia MIT.
// Para más información, consulta el archivo LICENSE en la raíz del repositorio. 

echo true || false . "\n";
echo false && true . "\n";

// Operador de identidad
var_dump(+"5");
var_dump(+"5.5");

// Con solo dos signos compara valores y con tres simbolos compara tipos
echo "5" == 5;
echo "\n";
echo "5" === 5;
echo "\n";
echo "5" != 4;
echo "\n";
echo "5" !== 4;
echo "\n";

// Da -1 si es menor, da 0 si son iguales y 1 si es mayor
echo 2 <=> 5;
echo "\n";
echo 5 <=> 5;
echo "\n";
echo 9 <=> 5;

// Fusión de null a ?? b
// si no esta definido a utiliza el b
$year = 2023;
echo "\nAño registrado " . ($last_year ?? $year);
