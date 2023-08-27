<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Agrega un nuevo ingreso</title>
  <link rel="stylesheet" href="/css/style.css">
</head>

<body>
  <h1>Agrega un nuevo ingreso</h1>
  <form action="/ingresos" method="post">
    <label for="metodo_pago">Metodo de pago</label>
    <select name="metodo_pago" id="metodo_pago">
      <option value="1" selected>Tarjeta de credito</option>
      <option value="2">Cuenta de ahorros</option>
    </select>

    <label for="tipo"></label>
    <select name="tipo" id="tipo">
      <option value="1" selected>Salario</option>
      <option value="2">Devolucion</option>
    </select>

    <label for="fecha">Fecha</label>
    <input type="text" name="fecha" id="fecha">

    <label for="cantidad">Cantidad</label>
    <input type="number" name="cantidad" id="cantidad">

    <label for="descripcion">Descripcion</label>
    <textarea name="descripcion" id="descripcion" cols="30" rows="10"></textarea>
    <input type="hidden" name="method" value="post">
    <button type="submit">Guardar</button>
  </form>
</body>

</html>