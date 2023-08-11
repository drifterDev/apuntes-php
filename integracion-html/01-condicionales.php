<!-- Autor: Mateo Álvarez Murillo
Fecha de creación: 2023

Este código se proporciona bajo la Licencia MIT.
Para más información, consulta el archivo LICENSE en la raíz del repositorio. -->

<?php
$edad = 19;
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Condicionales</title>
</head>

<body>
  <!-- aceptable, pero mejorable -->
  <?php if ($edad > 18) { ?>
    <p>mayor edad</p>
  <?php } else { ?>
    <p>menor de edad</p>
  <?php } ?>

  <!-- Otra forma, mucho mejor -->
  <?php if ($edad > 18) : ?>
    <p>mayor edad</p>
  <?php else : ?>
    <p>menor de edad</p>
  <?php endif; ?>

</body>

</html>