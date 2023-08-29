<?php

// Autor: Mateo Álvarez Murillo
// Fecha de creación: 2023

// Este código se proporciona bajo la Licencia MIT.
// Para más información, consulta el archivo LICENSE en la raíz del repositorio.

// php 05-errores.php http://localhost:8000/boo
// Pedido incorrecto
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $argv[1]);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

switch ($httpCode) {
  case 200:
    echo 'Respuesta correcta';
    break;
  case 400:
    echo 'Pedido incorrecto';
    break;
  case 404:
    echo 'Recurso no encontrado';
    break;
  case 500:
    echo 'Falló el servidor';
    break;
}
