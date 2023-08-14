<?php

// Autor: Mateo Álvarez Murillo
// Fecha de creación: 2023

// Este código se proporciona bajo la Licencia MIT.
// Para más información, consulta el archivo LICENSE en la raíz del repositorio. 

$courses = ['php', 'javascript'];
$wishes = ['php', 'javascript', 'laravel', 'vuejs'];

#array_diff();
//Calcula la diferencia entre arrays
var_dump(array_diff($wishes, $courses));
//Por ejemplo, tengo dos cursos(PHP y JS) pero quisiera saber que otros cursos le gustaría a mis estudiantes
//Con esto comparo los array y descarto los cursos que yo ya tengo.

$arrayA = [1, 2, 3, 4, 5];
$arrayB = [3, 4, 5, 6, 7];

var_dump(array_diff($arrayA, $arrayB));
//Evalua depende al orden que coloquemos
var_dump(array_diff($arrayB, $arrayA));

#array_diff_assoc()
//Calcula la diferencia entre arrays con un chequeo adicional de índices
$arrayA = array("a" => "JavaScript", "b" => "PHP", "c" => "Golang", "d" => "Ruby");
$arrayB = array("a" => "JavaScript", "d" => "Haskell", "Assembler");
var_dump(array_diff_assoc($arrayA, $arrayB));
//output: ['PHP', 'Golang', 'Ruby']