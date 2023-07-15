<?php


// Autor: Mateo Álvarez Murillo
// Fecha de creación: 2023

// Este código se proporciona bajo la Licencia MIT.
// Para más información, consulta el archivo LICENSE en la raíz del repositorio. 



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