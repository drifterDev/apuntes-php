<?php

// Autor: Mateo Álvarez Murillo
// Fecha de creación: 2023

// Este código se proporciona bajo la Licencia MIT.
// Para más información, consulta el archivo LICENSE en la raíz del repositorio. 

use App\Classes\Student;
use App\Classes\Teacher;

require("vendor/autoload.php");
$student = new Student();
$teacher = new Teacher();
echo $student->saludar() . "\n";
echo $student->despedir() . "\n";
echo $student->existir() . "\n";
echo $student->preguntar() . "\n";
echo "##########################\n";
echo $teacher->bienvenida() . "\n";
echo $teacher->despedida() . "\n";
echo $teacher->existir() . "\n";
echo $teacher->preguntar() . "\n";
