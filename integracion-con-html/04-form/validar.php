<!-- Autor: Mateo Álvarez Murillo
Fecha de creación: 2023

Este código se proporciona bajo la Licencia MIT.
Para más información, consulta el archivo LICENSE en la raíz del repositorio. -->

<?php

// Para el metodo post sería lo mismo pero con $_POST

// $nombre = $_GET['nombre'];
// $edad = $_GET['edad'];
// echo "El usuario $nombre tiene $edad años";
echo "<pre>";
var_dump($_FILES);
echo "</pre>";


$basename = $_FILES["imagen"]["name"];
$image = $_FILES["imagen"]["tmp_name"];
$ruta_subir = "img/$basename";

move_uploaded_file($image, $ruta_subir);

echo $basename;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Imagenes</title>
</head>

<body><br>
  <img width="400" src="<?= $ruta_subir ?>" alt="<?= $basename ?>">

</body>

</html>