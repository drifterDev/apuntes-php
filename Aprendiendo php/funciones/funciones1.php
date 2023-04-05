<?php
//DECLARACION DE FUNCIONES CON PARAMETROS POR DEFECTO
function holamundo($word, $bool=TRUE){
  if ($bool){
  echo 'Numero: '.$word.'<br/>';
  }else{
  echo 'Numero:<br/>';
}}

for ($i =1;$i<5;$i++){
  if ($i %2!=0){
  holamundo($i, FALSE);
  }else{
  holamundo($i);
  }
}
echo'<hr/>';

//VARIABLES LOCALES Y VARIABLES GLOBALES
function par($numero){
  if ($numero % 2==0){
    return 'par';
  } else{
    return 'impar';
  }
}

for ($j=1;$j < 5;$j++){
  $numero=par($j);
  echo 'Hola soy '.$numero.'<br/>';
}
echo'<hr/>';
//FUNCIONES VARIABLES
$funcion="par";
echo 'El 54 es '.$funcion(54).'<br/>';

?>