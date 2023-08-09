<?php

// Autor: Mateo Álvarez Murillo
// Fecha de creación: 2023

// Este código se proporciona bajo la Licencia MIT.
// Para más información, consulta el archivo LICENSE en la raíz del repositorio. 


if (!empty($_POST['nombre']) && !empty($_POST['apellidos'])  && !empty($_POST['edad']) && !empty($_POST['email']) && !empty($_POST['pass'])) {
  $error = "Ok";
  $nombre = $_POST['nombre'];
  $apellidos = $_POST['apellidos'];
  $edad = $_POST['edad'];
  $email = $_POST['email'];
  $password = $_POST['pass'];


  //Validar nombre
  if (!is_string($nombre) || preg_match("/[0-9]+/", $nombre)) {
    $error = "Nombre asignado mal";
  } else if (!is_string($apellidos) || preg_match("/[0-9]+/", $apellidos)) {
    $error = "Apellidos asignado mal";
  } else if (!is_numeric($edad) || !filter_var($edad, FILTER_VALIDATE_INT)) {
    $error = "Edad asignada mal";
  } else if (!is_string($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $error = "Email asignado mal";
  } else if (empty($password) || strlen($password) < 5) {
    $error = "Password asignado mal";
  }
} else {
  $error = "Faltan valores";
}
if ($error != "Ok") {
  header("Location:formulario2.php?error=" . $error);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Procesar formulario</title>
</head>

<body>
  <?php if ($error == 'Ok') : ?>
    <h1>Datos validados correctamente</h1>
    <p><strong>Nombre: </strong><?= $nombre ?></p>
    <p><strong>Apellidos: </strong><?= $apellidos ?></p>
    <p><strong>Edad: </strong><?= $edad ?></p>
    <p><strong>Email: </strong><?= $email ?></p>
  <?php endif; ?>
</body>

</html>