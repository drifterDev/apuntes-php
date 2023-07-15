
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
  <title>Validacion formularios</title>
</head>
<body>
  <?php
  if (isset($_GET['error'])){
    $error=$_GET['error'];
    if ($error){
      echo '<strong style="color:red">'.$error.'</strong>';
    }
  }
  ?>
  <h1>Validacion formulario en PHP</h1>
  <form action="guardar2.php" method="POST">
    <label for="nombre">Nombre:</label><br>
    <!--
    <input type="text" name="nombre"  pattern="[A-Za-z]+"><br>
    -->
    <input type="text" name="nombre"><br>
    <label for="apellidos">Apellidos:</label><br>
    <!-- <input type="text" name="apellidos" required pattern="[A-Za-z]+"><br> -->
    <input type="text" name="apellidos"><br>
    <label for="edad">Edad:</label><br>
    <!-- <input type="number" name="edad" required pattern="[0-9]+"><br> -->
    <input type="number" name="edad"><br>
    <label for="email">Email:</label><br>
    <input type="email" name="email"><br>
    <label for="pass">Contraseña:</label><br>
    <input type="password" name="pass" ><br>
    <input type="submit" value="Enviar"/>
  </form> 
</body>
</html>