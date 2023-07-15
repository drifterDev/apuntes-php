<?php

// Autor: Mateo Álvarez Murillo
// Fecha de creación: 2023

// Este código se proporciona bajo la Licencia MIT.
// Para más información, consulta el archivo LICENSE en la raíz del repositorio. 


  for($i=1;$i <101;$i++){
    if ($i % 2 == 0 && $i != 100){
      echo 'Par: '.$i.'<br/>';
    } elseif ($i % 2 ==0 && $i == 100){
      echo 'Par: '.$i;
    } else{
      continue;
    }
  }
?>