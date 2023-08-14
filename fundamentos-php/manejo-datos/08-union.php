<?php

// Autor: Mateo Álvarez Murillo
// Fecha de creación: 2023

// Este código se proporciona bajo la Licencia MIT.
// Para más información, consulta el archivo LICENSE en la raíz del repositorio. 

$frontend = [
  'html',
  'javascript',
  'react.js'
];

$backend = [
  'php',
  'laravel'
];

$frontend2 = [
  'structure' => 'html',
  'frontend' => 'javascript',
  'framework' => 'react.js'
];

$backend2 = [
  'backend' => 'php',
  'framework bk' => 'laravel'
];
// Podemos unir dos arryas así, pero terminaría borrando algunos valores. Sí
// queremos evitarlo debemos poner keys
var_dump($frontend + $backend);
var_dump($frontend2 + $backend2);

// Podemos usar una función también, pero solo con aquellos que tengan keys númericos
var_dump(array_merge($frontend, $backend));

// Si nuestros keys son letras debemos usar la siguiente función
var_dump(array_merge_recursive($frontend2, $backend2));

// Y si queremos combinar dos arrays,así creamos arrays complejos y lo hacemos con la función array_combine
$cursos = ['JS', 'php', 'laravel'];
$categorias = ['front', 'back', 'framework'];

var_dump(array_combine($cursos, $categorias));
