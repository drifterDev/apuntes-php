<!-- Autor: Mateo Álvarez Murillo
Fecha de creación: 2023

Este código se proporciona bajo la Licencia MIT.
Para más información, consulta el archivo LICENSE en la raíz del repositorio. -->

<?php

// Para el metodo post sería lo mismo pero con $_POST

$nombre = $_GET['nombre'];
$edad = $_GET['edad'];
echo "El usuario $nombre tiene $edad años";
