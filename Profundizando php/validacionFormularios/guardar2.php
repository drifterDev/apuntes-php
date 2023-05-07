<?php
if (isset($_POST['nombre']) && isset($_POST['apellidos'])  && isset($_POST['edad']) && isset($_POST['email']) && isset($_POST['pass']) ){
  $error="Ok";
  $nombre=$_POST['nombre'];
  $apellidos=$_POST['apellidos'];
  $edad=$_POST['edad'];
  $email=$_POST['email'];
  $password=$_POST['pass'];
}
if ($nombre==""){
  $error="Faltan valores";
}
header("Location:formulario2.php?error=".$error);

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
  
</body>
</html>