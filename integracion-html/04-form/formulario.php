<!-- Autor: Mateo Álvarez Murillo
Fecha de creación: 2023

Este código se proporciona bajo la Licencia MIT.
Para más información, consulta el archivo LICENSE en la raíz del repositorio. -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario GET</title>
</head>

<body>
  <!-- Si se nesesita usar post se pone post en method -->
  <form action="./validar.php" method="get">
    <label for="nombre">Nombre: </label>
    <input type="text" name="nombre" id="nombre"><br>
    <label for="edad">Edad: </label>
    <input type="number" name="edad" id="edad"><br>
    <button type="submit">Enviar formulario</button>
  </form>
</body>

</html>