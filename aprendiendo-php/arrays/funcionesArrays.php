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

$libros=array(
  'libro fantasia' => 'Imperio final',
  'libro triller' => 'La chica que se llevaron',
  'libro romance' => 'La cancion de aquiles'
);

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

  echo '<br/>Ordenado = ';
  asort($lista);
  var_dump($lista);
  echo '<br/>Orden Inverso = ';
  arsort($lista);
  var_dump($lista);
  echo '<br/>Una forma de anadir elemento ';
  $lista[]='Naranja';
  var_dump($lista);
  echo '<br/>Una forma de anadir elemento ';
  array_push($lista, 'Morado');
  var_dump($lista);
  echo '<br/>Una forma de eliminar elemento ';
  array_pop($lista);
  var_dump($lista);
  echo '<br/>Una forma de eliminar elemento ';
  unset($lista[4]);
  var_dump($lista);
  echo '<br/>Sacando elemento aleatorio ';
  echo $lista[array_rand($lista)];
  echo '<br/>Reverse a un array';
  var_dump(array_reverse($lista));
  echo '<br/>Buscando en array ';
  var_dump(array_search('Verde', $lista));
  echo '<br/>Contando las concurrencias ';
  echo count($lista);
  echo '<br/>';
?>