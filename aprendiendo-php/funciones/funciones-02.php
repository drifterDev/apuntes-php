<?php

// Autor: Mateo Álvarez Murillo
// Fecha de creación: 2023

// Este código se proporciona bajo la Licencia MIT.
// Para más información, consulta el archivo LICENSE en la raíz del repositorio. 


//FUNCIONES PREDEFINIDAS PHP
  $hola='Hola';
  var_dump($hola);
  echo '<br/>';
  echo 'Fecha: '.date('d-M-Y');
  echo '<br/>';
  echo 'Hora: '.time();
  echo '<br/>';
  echo "Raís cuadrada de 2 = ".sqrt(2);
  echo '<br/>';
  echo "Numero aleatorio [10, 34] = ".rand(10,34);
  echo '<br/>';
  echo 'Numero PI = '.round(pi(), 6);

  echo '<hr/>';
  //FUNCIONES PREDEFINIDAS PHP #2
  $bool=3245.345;
  $palabra="    Cat     ";
  $variableVacia=null;
  echo 'Tipo? '.gettype($bool);
  echo '<br/>';
  echo 'Es flotante? '.is_float($bool);
  echo '<br/>';
  echo 'Esta inicializada?'.isset($bool);
  echo '<br/>';
  echo var_dump($palabra);
  echo '<br/>';
  echo var_dump(trim($palabra));
  echo '<br/>';
  echo 'La variable esta vacia? '.empty($variableVacia);
  echo '<br/>';
  echo 'La longitud del string es '.strlen($palabra);
  echo '<br/>';
  echo 'Longitud del string apartir de \'a\' '. strpos($palabra, 'a');
?>