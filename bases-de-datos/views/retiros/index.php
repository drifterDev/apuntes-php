<!-- Autor: Mateo Álvarez Murillo
Fecha de creación: 2023

Este código se proporciona bajo la Licencia MIT.
Para más información, consulta el archivo LICENSE en la raíz del repositorio. -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista de retiros</title>
</head>

<body>
  <h1 class="text-2xl text-blue-400 font-bold mb-5">Lista de retiros</h1>
  <main class="flex flex-col items-center">
    <table>
      <tr>
        <th class="py-2 pr-5 border-r-2 border-black/70 text-black">Método de pago</th>
        <th class="py-2 px-5 border-r-2 border-black/70 text-black">Tipo de retiro</th>
        <th class="py-2 px-5 border-r-2 border-black/70 text-black">Fecha</th>
        <th class="py-2 px-5 border-r-2 border-black/70 text-black">Cantidad</th>
        <th class="py-2 px-5 text-black">Descripción</th>
      </tr>
      <tbody>
        <?php foreach ($result as $r) : ?>
          <tr>
            <td class="pr-5 border-r-2 border-black/70"><?= $r["metodo_pago"] == 1 ? "Tarjeta de credito" : "Cuenta de ahorros" ?></td>
            <td class="px-5 border-r-2 border-black/70"><?= $r["tipo"] == 1 ? "Retiro" : "Compra" ?></td>
            <td class="px-5 border-r-2 border-black/70"><?= $r["fecha"] ?></td>
            <td class="px-5 border-r-2 border-black/70"><?= $r["cantidad"] ?></td>
            <td class="px-5 "><?= $r["descripcion"] ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
    <div class="flex">
      <a class="mr-10 block w-48 text-center mt-5 p-2 bg-blue-200 border-2 border-blue-400 rounded" href="/retiros/create">Agregar nuevo retiro</a>
      <a class="block w-48 text-center mt-5 p-2 bg-blue-200 border-2 border-blue-400 rounded" href="/ingresos">Ir a ingresos</a>

    </div>
  </main>
</body>

</html>