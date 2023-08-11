<!-- Autor: Mateo Álvarez Murillo
Fecha de creación: 2023

Este código se proporciona bajo la Licencia MIT.
Para más información, consulta el archivo LICENSE en la raíz del repositorio. -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sanitizando datos</title>
</head>

<body>
  <form action="./server.php" method="post">
    <label for="nombre">Nombre: </label>
    <input type="text" name="nombre" id="nombre">
    <br><br>
    <label for="apodo">Apodo: </label>
    <input type="text" name="apodo" id="apodo">
    <br><br>
    <label for="correo">Correo: </label>
    <input type="text" name="correo" id="correo">
    <br><br>
    <label for="edad">Edad: </label>
    <input type="text" name="edad" id="edad">
    <br><br>
    <button name="form" type="submit">Enviar</button>
  </form>
</body>

</html>