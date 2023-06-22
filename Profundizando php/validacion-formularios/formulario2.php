
<!--
MIT License

Copyright (c) 2023 Mateo Álvarez Murillo

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
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