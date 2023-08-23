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
  <ul>
    <li><?= $student1->getName() ?> estudia: <?= $student1->getCareer() ?></li>
    <li><?= $student2->getName() ?> estudia: <?= $student2->getCareer() ?></li>
    <li><?= $student3->getName() ?> estudia: <?= $student3->getCareer() ?></li>
  </ul>
</body>

</html>