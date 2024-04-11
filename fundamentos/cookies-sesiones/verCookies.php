<?php


// Autor: Mateo Álvarez Murillo
// Fecha de creación: 2023

// Este código se proporciona bajo la Licencia MIT.
// Para más información, consulta el archivo LICENSE en la raíz del repositorio. 


if (isset($_COOKIE["migalleta"])) {
  echo '<p>' . $_COOKIE["migalleta"] . '</p>';
} else {
  echo '<p>No existe la cookie</p>';
}

if (isset($_COOKIE["unyear"])) {
  echo '<p>' . $_COOKIE["unyear"] . '</p>';
} else {
  echo '<p>No existe la cookie</p>';
}


?>

<a href="crearCookies.php">Crear las cookies</a><br />
<a href="eliminarCookies.php">Eliminar las cookies</a>