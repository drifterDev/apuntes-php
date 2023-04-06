<?php
//SESION: ALMACENAR DATOS DEL USUARIO MIENTRAS DURE LA SESION
session_start();
$variable_normal = "Soy un string";

$_SESSION['variable_persistente']='SESION ACTIVA';

echo $variable_normal.'<br/>';
echo $_SESSION['variable_persistente'].'<br/>';

?>