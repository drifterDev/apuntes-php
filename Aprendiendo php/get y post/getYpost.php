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