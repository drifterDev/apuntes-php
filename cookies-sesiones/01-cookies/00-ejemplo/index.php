<?php

// Autor: Mateo Álvarez Murillo
// Fecha de creación: 2023

// Este código se proporciona bajo la Licencia MIT.
// Para más información, consulta el archivo LICENSE en la raíz del repositorio. 

setcookie(
  name: "header_color",
  value: "#12373d"
);

$color = $_COOKIE["header_color"] ?? "#121f3d"

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Coockies</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <header style="background:<?= $color ?>;">
    <img src="./logo.webp" alt="Logo">
  </header>
</body>

</html>