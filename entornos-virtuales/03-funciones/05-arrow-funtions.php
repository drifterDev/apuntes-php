<?php
// Autor: Mateo Álvarez Murillo
// Fecha de creación: 2023

// Este código se proporciona bajo la Licencia MIT.
// Para más información, consulta el archivo LICENSE en la raíz del repositorio. 

// Las arrow funtion usan el ambito global
$cajero = 10;
$add_cajero = fn ($val) => $cajero += $val;
echo $add_cajero(8) . "\n";
echo $add_cajero(2) . "\n";
$add_cajero(24);
echo $cajero . "\n";
// Las arrow funtion no editan el valor de la variable global
// Si lo pueden cambiar al momento de su ejecución, pero al
// Finalizar vuelve a su respectivo valor
