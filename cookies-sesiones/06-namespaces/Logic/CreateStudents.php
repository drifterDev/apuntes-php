<?php

// Autor: Mateo Álvarez Murillo
// Fecha de creación: 2023

// Este código se proporciona bajo la Licencia MIT.
// Para más información, consulta el archivo LICENSE en la raíz del repositorio. 

require("Classes/StudentsNoMatriculados/Student.php");
require("Classes/StudentsMatriculados/Student.php");

// $student1 = new StudentsNoMatriculados\Student("Mateo", 19, "Informatica");
// $student2 = new StudentsNoMatriculados\Student("Daniel", 20, "Mecanica");
// $student3 = new StudentsNoMatriculados\Student("Yesica", 18, "Negocios");

// $student4 = new StudentsMatriculados\Student("Kevin", 200000, "2020-10-10", "Medicina");
// $student5 = new StudentsMatriculados\Student("Juan", 300000, "2020-10-10", "Ingenieria");
// $student6 = new StudentsMatriculados\Student("Maria", 400000, "2020-10-10", "Derecho");

use StudentsNoMatriculados\Student;
use StudentsMatriculados\Student as StudentM;


$student1 = new Student("Mateo", 19, "Informatica");
$student2 = new Student("Daniel", 20, "Mecanica");
$student3 = new Student("Yesica", 18, "Negocios");

$student4 = new StudentM("Kevin", 200000, "2020-10-10", "Medicina");
$student5 = new StudentM("Juan", 300000, "2023-11-01", "Ingenieria");
$student6 = new StudentM("Maria", 400000, "2018-06-14", "Derecho");
