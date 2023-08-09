<?php


// Autor: Mateo Álvarez Murillo
// Fecha de creación: 2023

// Este código se proporciona bajo la Licencia MIT.
// Para más información, consulta el archivo LICENSE en la raíz del repositorio. 


if (isset($_COOKIE['migalleta'])) {
  unset($_COOKIE['migalleta']);
  setcookie('migalleta', "", time() - 100);
}
if (isset($_COOKIE['unyear'])) {
  unset($_COOKIE['unyear']);
  setcookie('unyear', "", time() - 100);
}
header('location:verCookies.php');
