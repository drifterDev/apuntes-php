<?php

// Configuración básica para permitir solicitudes desde cualquier origen
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");


// Endpoint simple para devolver un mensaje
echo json_encode(['mensaje' => 'API simple en PHP funciona!']);
