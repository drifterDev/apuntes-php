<?php

// Autor: Mateo Álvarez Murillo
// Fecha de creación: 2023

// Este código se proporciona bajo la Licencia MIT.
// Para más información, consulta el archivo LICENSE en la raíz del repositorio.

$time = time();
echo "Time: $time" . PHP_EOL . "Hash: " . sha1($argv[1] . $time . 'secreto, no se lo digas a nadie') . PHP_EOL;

// php generate_hash.php 1