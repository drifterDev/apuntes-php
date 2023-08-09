<?php


// Autor: Mateo Álvarez Murillo
// Fecha de creación: 2023

// Este código se proporciona bajo la Licencia MIT.
// Para más información, consulta el archivo LICENSE en la raíz del repositorio. 


session_start();

if (!isset($_SESSION['n'])) {
  $_SESSION['n'] = 0;
}


if (isset($_GET['counter']) && $_GET['counter'] == 1) {
  $_SESSION['n'] += 1;
} elseif (isset($_GET['counter']) && $_GET['counter'] == 0) {
  $_SESSION['n'] -= 1;
}


echo "Valor de n = " . $_SESSION['n'] . "<br/>";

?>

<a href="ejercicio1.php?counter=1">Aumentar</a><br>
<a href="ejercicio1.php?counter=0">Disminuir</a>