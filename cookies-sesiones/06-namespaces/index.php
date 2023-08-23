<?php

// Autor: Mateo Álvarez Murillo
// Fecha de creación: 2023

// Este código se proporciona bajo la Licencia MIT.
// Para más información, consulta el archivo LICENSE en la raíz del repositorio. 

require("Logic/CreateStudents.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Modularización</title>
</head>

<body>
  <h2>Estudiantes no matriculados</h2>
  <ul>
    <li><?= $student1->getName() ?> estudia: <?= $student1->getCareer() ?></li>
    <li><?= $student2->getName() ?> estudia: <?= $student2->getCareer() ?></li>
    <li><?= $student3->getName() ?> estudia: <?= $student3->getCareer() ?></li>
  </ul>
  <h2>Estudiantes matriculados</h2>
  <ul>
    <li><?= $student4->getName() ?> matriculado en: <?= $student4->getDate() ?> y estudia: <?= $student4->getCareer() ?></li>
    <li><?= $student5->getName() ?> matriculado en: <?= $student5->getDate() ?> y estudia: <?= $student5->getCareer() ?></li>
    <li><?= $student6->getName() ?> matriculado en: <?= $student6->getDate() ?> y estudia: <?= $student6->getCareer() ?></li>
  </ul>
</body>

</html>