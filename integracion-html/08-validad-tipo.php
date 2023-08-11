<!-- Autor: Mateo Álvarez Murillo
Fecha de creación: 2023

Este código se proporciona bajo la Licencia MIT.
Para más información, consulta el archivo LICENSE en la raíz del repositorio. -->

<?php

$is_float = filter_var("0.9", FILTER_VALIDATE_FLOAT, FILTER_FLAG_ALLOW_THOUSAND);
$is_int = filter_var("45", FILTER_VALIDATE_INT);
$is_ip = filter_var("127.0.0.1", FILTER_VALIDATE_IP);
$is_url = filter_var("https://platzi.com", FILTER_VALIDATE_URL);
$is_email = filter_var("mrmichi@michisancio.com", FILTER_VALIDATE_EMAIL);

// Validar si es un número
$isNumeric = is_numeric('3d'); // False
$isNumeric1 = is_numeric('3'); // True
$isNumeric2 = is_numeric(3); // True

// Validar si es un string
$isString = is_string('3d'); // True
$isString1 = is_string('3'); // True
$isString2 = is_string(3); // false

// validar si es un array
$isArray = is_array([]); // true
$isArray2 = is_array(array()); // true
$isArray3 = is_array('string'); // false

?>