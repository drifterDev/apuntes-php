<?php

// Autor: Mateo Álvarez Murillo
// Fecha de creación: 2023

// Este código se proporciona bajo la Licencia MIT.
// Para más información, consulta el archivo LICENSE en la raíz del repositorio. 

// Con include no importa si no encuentra el archivo, solo lanza un warning
// Con require Si importa si no encuentra el archivo porque soltará un error fatal
include("./constantes.php");
// require("./constantes.php");
// y con _once se evita el error de importar dos o más veces el mismo codigo
echo "Hola, " . NOMBRE . "!\n";
