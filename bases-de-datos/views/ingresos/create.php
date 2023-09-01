<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Agrega nuevo ingreso</title>
</head>

<body>
<h1 class="text-2xl text-blue-400 font-bold mb-5">Nuevo ingreso</h1>
  <main>
    <form action="/ingresos" method="post">
      <div class="mb-3">
        <label for="metodo_pago" class="pr-4">Metodo de pago<span class="text-red-500"> *</span></label>
        <select name="metodo_pago" id="metodo_pago" class="bg-gray-100 rounded px-3 py-2">
          <option value="1" selected>Tarjeta de credito</option>
          <option value="2">Cuenta de ahorros</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="tipo" class="pr-6">Tipo de ingreso<span class="text-red-500"> *</span></label>
        <select name="tipo" id="tipo" class="bg-gray-100 rounded px-3 py-2">
          <option value="1" selected>Salario</option>
          <option value="2">Devolucion</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="fecha">Fecha<span class="text-red-500 pr-24"> *</span></label>
        <input type="text" name="fecha" id="fecha" class="border-gray-200 border-2 rounded">
      </div>
      <div class="mb-3">
        <label for="cantidad">Cantidad<span class="text-red-500 pr-[4.5rem]"> *</span></label>
        <input type="number" name="cantidad" id="cantidad" class="border-gray-200 border-2 rounded ">
      </div>
      <div class="flex flex-col">
        <label for="descripcion" class="mb-3">Descripcion:</label>
        <textarea name="descripcion" id="descripcion" cols="30" rows="3" class="border-gray-200 border-2 rounded p-5"></textarea>
      </div>
      <input type="hidden" name="method" value="post">
      <div class="flex justify-center mt-2">
      <button class="block w-32 text-center mt-5 p-2 bg-blue-200 border-2 border-blue-400 rounded" type="submit">Guardar</button>
      <a class="block w-32 ml-10 text-center mt-5 p-2 bg-blue-200 border-2 border-blue-400 rounded" href="/ingresos">Regresar</a>
      
    </div>
    </form>
  </main>
</body>

</html>