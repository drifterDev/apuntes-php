<?php

// Autor: Mateo Álvarez Murillo
// Fecha de creación: 2023

// Este código se proporciona bajo la Licencia MIT.
// Para más información, consulta el archivo LICENSE en la raíz del repositorio. 


$lista=[1, 18,27,36,45,54,63,72,81];
for($i=1;$i<=sizeof($lista);$i++){
  echo 'numero #'.$i.' = '.$lista[$i-1].'<br/>';
}
asort($lista);
foreach($lista as $numero){
  echo $numero.' ';
}
echo '<br/>Longitud del array: '.sizeof($lista);

echo '<br/>En la posicion #4 esta: '.$lista[3];
?>