<?php
  $lista=array('Azul', 'Rojo', 'Verde', 'Amarillo');
  var_dump($lista);
  echo '<br/><ul>';

  //DOS FORMAS DE RECORRER ARRAYS
  for ($i=0; $i < count($lista);$i++){
    echo '<li>color '.$lista[$i].'</li>';
  }
  echo '</ul>';

  foreach($lista as $color){
    if ($color == $lista[count($lista)-1]){
    echo $color.' = Happy<br/>';
    }else{
    echo "$color + ";
  }}
//ARRAY ASOCIATIVOS (DICCIONARIOS????)

$libros=array(
  'libro fantasia' => 'Imperio final',
  'libro triller' => 'La chica que se llevaron',
  'libro romance' => 'La cancion de aquiles'
);
var_dump($libros);

//ARRAY MULTIDIMENSIONALES
$cosas=[[
  'libro fantasia' => 'Imperio final',
  'libro triller' => 'La chica que se llevaron',
  'libro romance' => 'La cancion de aquiles'
], array('Azul', 'Rojo', 'Verde', 'Amarillo')];
var_dump($cosas);
echo '<br/>';
echo 'Cosas [1][2] = '.$cosas[1][2].'<br/>';


//EJEMPLO
$contacto =array(
  array(
    'nombre' => 'Mateo',
    'apellido' => 'Alvarez'
  ),
  array(
    'nombre' => 'Daniel',
    'apellido' => 'Ramirez'
  ),
  array(
    'nombre' => 'Efrain',
    'apellido' => 'Gomez'
  )
  );
foreach($contacto as $key => $contacto){
  var_dump($contacto['apellido']);
  echo '<br/>';
}
?>