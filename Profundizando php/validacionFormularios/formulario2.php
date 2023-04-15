<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Validacion formulario</title>
</head>
<body>
  <h1>Validación formularios en php</h1>
  <form action="procesar-formulario.php" method="POST">
    <label for="nombre">Nombre: </label><br>
    <input type="text" name="nombre" required="required" pattern="[A-Za-z]+"><br><br>
    <label for="apellidos">Apellidos: </label><br>
    <input type="text" name="apellidos" required="required" pattern="[A-Za-z]+"><br><br>
    <label for="edad">Edad: </label><br>
    <input type="number" name="edad" required="required" pattern="[0-9]+"><br><br>
    <label for="email">Email: </label><br>
    <input type="email" name="email" required="required"><br><br>
    <label for="pass">Password: </label><br>
    <input type="password" name="pass" required="required"><br><br>
    <input type="submit" value="Enviar">
  </form>
</body>
</html>