<!-- Autor: Mateo Álvarez Murillo
Fecha de creación: 2023

Este código se proporciona bajo la Licencia MIT.
Para más información, consulta el archivo LICENSE en la raíz del repositorio. -->

<?php

$nombre = $_POST["nombre"];
$apodo = $_POST["apodo"];
$correo = $_POST["correo"];
$edad = $_POST["edad"];

// quita codigo html
$html = htmlentities($nombre);
// evita las comillas
$slashes = addslashes($nombre);
// quitar todos los numeros
$only_words = preg_replace("/\d/", "", $nombre);
// quita letras
$only_nums = preg_replace("/\D/", "", $edad);
// filtra email
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
// filtra numeros enteros
$age = filter_var($edad, FILTER_SANITIZE_NUMBER_INT);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Datos form</title>
</head>

<body>

</body>

</html>