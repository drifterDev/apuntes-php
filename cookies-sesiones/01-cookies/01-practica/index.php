<?php

// Autor: Mateo Álvarez Murillo
// Fecha de creación: 2023

// Este código se proporciona bajo la Licencia MIT.
// Para más información, consulta el archivo LICENSE en la raíz del repositorio. 

if (!isset($_COOKIE["ejemplo#1"])) {

  // El tiempo se maneja en segundos
  // Si el valor es 0, entonces cuando se cierre el navegador

  setcookie(
    name: "ejemplo#1",
    value: "Valor #1",
    // expires_or_options: time() + 60
    expires_or_options: time() + 60,
    // Si se pone / entonces en todas partes se podrá acceder a ella
    path: "/",
    domain: "localhost",
    // Si es true se crea si la pagina tiene https
    secure: false,
    // Lenguajes como js pueden leer la cookie 
    httponly: true
  );
  echo "Cookie creada!\n";
}

var_dump($_COOKIE);
