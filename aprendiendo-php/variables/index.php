<!--
Autor: Mateo Álvarez Murillo
Fecha de creación: 2023

Este código se proporciona bajo la Licencia MIT.
Para más información, consulta el archivo LICENSE en la raíz del repositorio. 
-->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Primera pagina PHP</title>
</head>
<body>
  <?php
    // Comenzando a hacer un listado de los libros leidos
    echo "<h2>Listado de libros leidos este año</h2>";
    echo"<ul>"
        . "<li>Imperio Final</li>"
        . "<li>El Pozo de la ascension</li>"
        . "<li>El Heroe de las eras</li>"
        . "<li>El barco de los muertos</li>"
        . "<li>La historia secreta de Mistborn</li>"."</ul>";
    echo "<p>Hasta el momento he leído"." 5 libros</p>";
  ?>
  <!--Otras formas de hacer un echo-->
  <?="<br/><p>Otra forma de hacer un echo rapido</p>"?>
</body>
</html>
