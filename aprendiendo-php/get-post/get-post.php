<!--
Autor: Mateo Álvarez Murillo
Fecha de creación: 2023

Este código se proporciona bajo la Licencia MIT.
Para más información, consulta el archivo LICENSE en la raíz del repositorio. 
-->


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario</title>
</head>
<body>
  <h1>Formulario en PHP</h1>
  <form action="recibir.php" method="POST">
    <label for="nombre">Nombre: </label>
    <input type="text" name="nombre"><br><br>
    <label for="apellido">Apellidos: </label>
    <input type="text" name="apellido"><br><br>
    <input type="submit"value="Enviar datos"/>
  </form>
</body>
</html>