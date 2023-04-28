<?php

/*
 * MIT License
 *
 * Copyright (c) 2023 Mateo Álvarez Murillo
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 * 
 * This software and associated files are subject to the terms and conditions of
 * the MIT License and are included in this distribution. A copy of the license
 * can be found in the file LICENSE in the root of this distribution.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 */

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