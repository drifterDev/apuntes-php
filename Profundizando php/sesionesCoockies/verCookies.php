<?php

if (isset($_COOKIE["migalleta"])){
  echo '<p>'.$_COOKIE["migalleta"].'</p>';
} else{
  echo '<p>No existe la cookie</p>';
}

if (isset($_COOKIE["unyear"])){
  echo '<p>'.$_COOKIE["unyear"].'</p>';
} else{
  echo '<p>No existe la cookie</p>';
}


?>

<a href="crearCookies.php">Crear las cookies</a><br/>
<a href="eliminarCookies.php">Eliminar las cookies</a>