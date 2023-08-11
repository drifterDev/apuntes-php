<!-- Autor: Mateo Álvarez Murillo
Fecha de creación: 2023

Este código se proporciona bajo la Licencia MIT.
Para más información, consulta el archivo LICENSE en la raíz del repositorio. -->

<?php
// isset es para verificar que si este definido
if (isset($_POST["nombre"]) && !empty($_POST["nombre"])) {
  echo "¡Bienvenido, " . $_POST['nombre'] . "!";
} else {
  echo "No se ha mandado ningun nombre";
}

if (isset($_POST["btn"])) {
  echo "se envio el form";
} else {
  echo "no se envio el form";
}
?>