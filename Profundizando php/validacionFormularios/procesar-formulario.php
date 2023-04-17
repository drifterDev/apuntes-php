
<?php
$error = "Faltan valores";
if(isset($_POST['nombre']) && isset($_POST['apellidos']) &&
 isset($_POST['email']) && isset($_POST['pass']) &&
  isset($_POST['edad'])){
    $error="ok";
    $nombre=$_POST['nombre'];
    $pass=$_POST['pass'];
    $apellidos=$_POST['apellidos'];
    $edad=$_POST['edad'];
    $email=$_POST['email'];
}else{
  header("Location:formulario2.php?error=$error");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Validacion formulario</title>
</head>
<body>
  
</body>
</html>