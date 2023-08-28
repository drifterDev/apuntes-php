<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/styles.css">
  <link rel="stylesheet" href="/css/index.css">
  <title>Lista de ingresos</title>
</head>

<body>
  <h1>Lista de ingresos</h1>
  <main>
    <table>
      <tr>
        <th>Método de pago</th>
        <th>Tipo de ingreso</th>
        <th>Fecha</th>
        <th>Cantidad</th>
        <th>Descripción</th>
      </tr>
      <tbody>
        <?php foreach ($results as $r) : ?>
          <tr>
            <td><?= $r["metodo_pago"] ?></td>
            <td><?= $r["tipo"] ?></td>
            <td><?= $r["fecha"] ?></td>
            <td><?= $r["cantidad"] ?></td>
            <td><?= $r["descripcion"] ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
    <a class="button-link" href="/ingresos/create">Agregar nuevo ingreso</a>
  </main>
</body>

</html>