<!--
Autor: Mateo Álvarez Murillo
Fecha de creación: 2023

Este código se proporciona bajo la Licencia MIT.
Para más información, consulta el archivo LICENSE en la raíz del repositorio. 
-->

<?php
$nombre = "Mateo";
$apellido = "Alvarez";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Preprocesando</title>
</head>

<body>
  <h1><?php echo "Hola mundo!"; ?></h1>
  <h1><?= "Hola mundo!" ?></h1>
  <p>Hecho por &copy; <?= "$nombre $apellido" ?></p>
</body>

</html>