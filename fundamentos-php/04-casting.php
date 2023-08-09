<?php

// Autor: Mateo Álvarez Murillo
// Fecha de creación: 2023

// Este código se proporciona bajo la Licencia MIT.
// Para más información, consulta el archivo LICENSE en la raíz del repositorio. 

$num = "24";
var_dump($num);
$num = (int) $num;
var_dump($num);

// Los float no se redondean
$days = 5.89;
var_dump($days);
$days = (int) $days;
var_dump($days);
