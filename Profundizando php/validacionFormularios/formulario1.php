<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario</title>
</head>
<body>
  <h1>Formulario de prueba</h1>
  <form action="guardar1.php" method="POST">
    Titulo:
    <br>
    <input type="text" name="titulo"><br>
    Descripcion
    <br>
    <textarea name="descripcion" cols="30" rows="10"></textarea>
    <br>
    <input type="submit" value="Enviar"/>
  </form>
</body>
</html>