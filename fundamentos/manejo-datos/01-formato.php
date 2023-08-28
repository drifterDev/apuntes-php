<?php

// Autor: Mateo Álvarez Murillo
// Fecha de creación: 2023

// Este código se proporciona bajo la Licencia MIT.
// Para más información, consulta el archivo LICENSE en la raíz del repositorio. 

$texto = "Aprendiendo PHP ";
echo strtoupper($texto);
echo "\n";
echo strtolower($texto);
echo "\n";

// Primera letra mayuscula
echo ucfirst($texto);
echo "\n";
echo lcfirst($texto);
echo "\n";

// Reemplazar caracteres
echo str_replace(" ", "-", $texto);
echo "\n";

// Para rellenar strings
// Por defecto es derecha
echo str_pad($texto, 20, "#");
echo "\n";
echo str_pad($texto, 20, "#", STR_PAD_BOTH);
echo "\n";
echo str_pad($texto, 20, "#", STR_PAD_LEFT);
echo "\n";

//Eliminamos cualquier etiqueta html
$texto = "</br>Hola";
echo strip_tags($texto);
echo "\n";

// Para poder usar caracteres especiales ´ ñ
// Solo sería necesario usar mb_ antes de cada metodo
$texto = "Hola, php es el lenguaje más extraño";
echo mb_strtoupper($texto);
