<!-- Autor: Mateo Álvarez Murillo
Fecha de creación: 2023

Este código se proporciona bajo la Licencia MIT.
Para más información, consulta el archivo LICENSE en la raíz del repositorio. -->

<?php
$count = 0;
$emails = array(
  "Mateo" => "mateo@correo",
  "Daniel" => "daniel@correo",
  "Kevin" => "kevin@correo",
  "Yesica" => "yesica@correo"
);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ciclos</title>
</head>

<body>
  <ul>
    <h2>Ciclo for</h2>
    <?php for ($i = 0; $i < 8; $i++) : ?>
      <li>Iteracion <?= $i + 1 ?></li>
    <?php endfor; ?>
    <h2>Ciclo while</h2>
    <?php while ($count < 10) : ?>
      <li><strong>Iteracion <?= $count + 1 ?></strong></li>
      <?php
      $count += 1;
      ?>
    <?php endwhile; ?>
    <h2>Ciclo foreach</h2>
    <?php foreach ($emails as $person => $email) : ?>
      <li><?= "Persona: " . $person . ", Email: " . $email ?></li>
    <?php endforeach; ?>
  </ul>
</body>

</html>