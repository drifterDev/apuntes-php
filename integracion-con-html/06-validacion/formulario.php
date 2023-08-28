<!-- Autor: Mateo Álvarez Murillo
Fecha de creación: 2023

Este código se proporciona bajo la Licencia MIT.
Para más información, consulta el archivo LICENSE en la raíz del repositorio. -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Validación formulario</title>
</head>

<body>
  <form action="./server.php" method="post">
    <label for="nombre">Nombre: </label>
    <input type="text" name="nombre" id="nombre">
    <button name="btn" type="submit">Enviar</button>
  </form>
</body>

</html>