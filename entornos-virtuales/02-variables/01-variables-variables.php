<?php
// Autor: Mateo Álvarez Murillo
// Fecha de creación: 2023

// Este código se proporciona bajo la Licencia MIT.
// Para más información, consulta el archivo LICENSE en la raíz del repositorio. 

$nombre = "123";
/* Esta primera parte tira
PHP Warning:  Undefined variable $123 */
echo $$nombre;
echo "\n";

/* En esta parte se guarda en $123 el valor dado.
Ahora bien si uso $123 eso va a ser un error de sintaxix
pero se puede usar perfectamente $$nombre */
$$nombre = "otroNombre";
$array = [
  $nombre => $$nombre
];
print_r($array);
echo "\n";
