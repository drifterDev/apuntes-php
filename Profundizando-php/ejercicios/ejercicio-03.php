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
  <title>Calculadora</title>
</head>
<body>
  <h1>Calculadora con PHP</h1>
  <form action="calculadora.php" method="POST">
    <label for="numero1">Numero 1</label><br>
    <input type="number" name="numero1" pattern="[0-9]+" required><br>
    <label for="numero2">Numero 2</label><br>
    <input type="number" name="numero2" pattern="[0-9]+" required><br><br>
    <input type="submit" value="Sumar" name="sumar"/>
    <input type="submit" value="Restar" name="restar"/>
    <input type="submit" value="Multiplicar" name="multiplicar"/>
    <input type="submit" value="Dividir" name="dividir"/>
    <?php
    if (isset($_GET['mensaje'])){
      echo "<p><strong>Resultado = ".$_GET['mensaje']."</strong></p>";
    }
    ?>
  </form>
</body>
</html>