<!-- Autor: Mateo Álvarez Murillo
Fecha de creación: 2023

Este código se proporciona bajo la Licencia MIT.
Para más información, consulta el archivo LICENSE en la raíz del repositorio. -->

<?php
$usuarios = array(
  array(
    "id" => 0,
    "username" => "light"
  ),
  array(
    "id" => 1,
    "username" => "drifter"
  ),
  array(
    "id" => 2,
    "username" => "maalva"
  ),
);
$edad = 19;
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pasando variables a JS</title>
</head>

<body>
  <script>
    var users = JSON.parse('<?= json_encode($usuarios) ?>');
    var edad = <?= $edad ?>;
  </script>
  <script src="./script.js"></script>
</body>

</html>