<?php

// Autor: Mateo Álvarez Murillo
// Fecha de creación: 2023

// Este código se proporciona bajo la Licencia MIT.
// Para más información, consulta el archivo LICENSE en la raíz del repositorio. 


$lista=[];
for ($i=1;$i<1000;$i++){
  if (sizeof($lista)<120){
    array_push($lista, $i);
  }else{
    break;
  }
}
var_dump($lista);

?>