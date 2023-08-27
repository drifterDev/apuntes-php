<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista de ingresos</title>
</head>

<body>
  <h1>Lista de ingresos</h1>
  <ul>
    <?php foreach ($results as $r) : ?>
      <li>Te fueron ingresados <?= $r["cantidad"] ?> COP de <?= $r["descripcion"] ?></li>
    <?php endforeach; ?>
  </ul>
</body>

</html>