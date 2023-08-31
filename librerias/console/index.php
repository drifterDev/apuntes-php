<?php

// Autor: Mateo Álvarez Murillo
// Fecha de creación: 2023

// Este código se proporciona bajo la Licencia MIT.
// Para más información, consulta el archivo LICENSE en la raíz del repositorio.

namespace Console;

require __DIR__.'\..\vendor\autoload.php';

$books=["El imperio final", "El bestiario de Axlin"];

\FB::log("Hola");
\FB::log($books);