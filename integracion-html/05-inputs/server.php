<!-- Autor: Mateo Álvarez Murillo
Fecha de creación: 2023

Este código se proporciona bajo la Licencia MIT.
Para más información, consulta el archivo LICENSE en la raíz del repositorio. -->

<?php
echo "</br>Input simple";
var_dump($_POST["nombre"]);
echo "</br>Input arreglo";
var_dump($_POST["users"]);
echo "</br>Input asociativo";
var_dump($_POST["persona"]);
// para los checkbox primero hay que verificar que existe o que fue clicado
echo "</br>Input checkbox</br>";
var_dump($_POST["lista1"]);
echo "</br>";
var_dump($_POST["lista2"]);
echo "</br>";
var_dump($_POST["lista3"]);
echo "</br>Input radio</br>";
var_dump($_POST["pais"]);
echo "</br>Multiples archivos</br>";
var_dump($_FILES["galeria"]);
?>