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
  <title>Aprendiendo las variables</title>
</head>

<body>
  <h1>VARIABLES</h1>
  <?php
  /**
   * TIPOS DE DATOS:
   * 1- int
   * 2- float - double
   * 3- string
   * 4- boolean
   * 5- null
   * 6- arrays
   * 7- objetos
   */

  $Hola = false;
  $Hola = "Hola";
  //$Hola = 432.3425;
  $boolean = true;
  echo "Deuda hasta la fecha: " . $Hola . '<br/>';
  echo "<strong>\"$Hola\"</strong><br/>"; //Con comillas dobles es normal, pero es más lento
  echo 'Valor de la variable: ' . $Hola . '<br/>';  //Con comillas simples hay que concatenar
  echo gettype($Hola) . "<br/>";

  /**
   * DEBUGUEAR
   */
  echo '<h1>DEBUG</h1>';
  var_dump($boolean);
  echo "<br/>";
  var_dump($Hola);
  echo "<br/>";

  /**
   * CONSTANTES
   */
  echo '<h1>CONSTANTES</h1>';
  define('constante', 243);
  define('Portafolio', 'www.drifter.dev');
  echo constante . '<br/>';
  echo Portafolio . '<br/>';
  //Constantes ya definidas
  //PHP_OS
  //PHP_VERSION
  //__FILE__
  //__LINE__
  echo __FILE__;
  ?>
</body>

</html>