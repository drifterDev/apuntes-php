<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/styles.css">
  <link rel="stylesheet" href="/css/create.css">
  <title>Agrega nuevo ingreso</title>
</head>

<body>
  <h1>Agrega un nuevo ingreso</h1>
  <main>
    <form action="/incomes" method="post">

      <div class="input-group">
        <label for="metodo_pago">Metodo de pago</label>
        <select name="metodo_pago" id="metodo_pago">
          <option value="1" selected>Tarjeta de credito</option>
          <option value="2">Cuenta de ahorros</option>
        </select>
      </div>
      <div class="input-group">
        <label for="tipo">Tipo de ingreso</label>
        <select name="tipo" id="tipo">
          <option value="1" selected>Salario</option>
          <option value="2">Devolucion</option>
        </select>
      </div>
      <div class="input-group">
        <label for="fecha">Fecha</label>
        <input type="text" name="fecha" id="fecha">
      </div>
      <div class="input-group">
        <label for="cantidad">Cantidad</label>
        <input type="number" name="cantidad" id="cantidad">
      </div>
      <div class="input-group">
        <label for="descripcion">Descripcion</label>
        <textarea name="descripcion" id="descripcion" cols="30" rows="10"></textarea>
      </div>
      <input type="hidden" name="method" value="post">
      <div class="button-container">
        <button class="button-link" type="submit">Guardar</button>
      </div>
    </form>
  </main>
</body>

</html>