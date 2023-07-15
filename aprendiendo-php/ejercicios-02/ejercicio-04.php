<?php

// Autor: Mateo Álvarez Murillo
// Fecha de creación: 2023

// Este código se proporciona bajo la Licencia MIT.
// Para más información, consulta el archivo LICENSE en la raíz del repositorio. 


$nombre='Mateo Alvarez';
$edad=18;
$mayorDeEdad=TRUE;
$librosLeidos=["Imperio final", "Pozo de la ascension", "Heroe de las eras"];

function tipo($var){
  if (is_array($var)){
    return 'Array';
  }elseif(is_string($var)){
    return 'String';
  }elseif(is_int($var)){
    return 'Integer';
  }elseif(is_bool($var)){
    return 'Boolean';
  }else{
    return 'Null';
  }
}

echo 'Variable nombre es de tipo '.tipo($nombre).'<br/>';
echo 'Variable edad es de tipo '.tipo($edad).'<br/>';
echo 'Variable mayorDeEdad es de tipo '.tipo($mayorDeEdad).'<br/>';
echo 'Variable librosLeidos es de tipo '.tipo($librosLeidos).'<br/>';


?>