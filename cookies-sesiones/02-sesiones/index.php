<?php

// Autor: Mateo Álvarez Murillo
// Fecha de creación: 2023

// Este código se proporciona bajo la Licencia MIT.
// Para más información, consulta el archivo LICENSE en la raíz del repositorio. 

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sesiones</title>
</head>

<body>
  <?php if (isset($_SESSION["id"])) : ?>
    <H1>Hola <?= $_SESSION["username"] ?>!</H1>
    <p>Correo: <?= $_SESSION["email"] ?></p>
  <?php else : ?>
    <h1>No has iniciado sesión</h1>
  <?php endif; ?>
</body>

</html>