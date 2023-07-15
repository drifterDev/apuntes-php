<?php

// Autor: Mateo Álvarez Murillo
// Fecha de creación: 2023

// Este código se proporciona bajo la Licencia MIT.
// Para más información, consulta el archivo LICENSE en la raíz del repositorio. 


$word="Mundo";
if (isset($_GET['palabra'])){
  $word=$_GET['palabra'];
  echo 'La palabra que quiero decir es '.$word;
} else{
echo 'La palabra que quiero decir es <strong>'.strtolower($word).'</strong>';
}

?>