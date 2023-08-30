<?php

// Autor: Mateo Álvarez Murillo
// Fecha de creación: 2023

// Este código se proporciona bajo la Licencia MIT.
// Para más información, consulta el archivo LICENSE en la raíz del repositorio.

// http://localhost:8000
// http://localhost:8000/contacts
// http://localhost:8000/services
// http://localhost:8000/home
use App\Http\Request;

require __DIR__ . '/../vendor/autoload.php';

$request = new Request;
$request->send();
