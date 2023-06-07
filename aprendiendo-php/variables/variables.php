<!--
MIT License

Copyright (c) 2023 Mateo Álvarez Murillo

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
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
    echo"Deuda hasta la fecha: ".$Hola.'<br/>';
    echo"<strong>\"$Hola\"</strong><br/>"; //Con comillas dobles es normal, pero es más lento
    echo'Valor de la variable: '.$Hola.'<br/>';  //Con comillas simples hay que concatenar
    echo gettype($Hola)."<br/>";

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
    define ('Portafolio', 'www.drifter.dev');
    echo constante.'<br/>';
    echo Portafolio.'<br/>';
    //Constantes ya definidas
    //PHP_OS
    //PHP_VERSION
    //__FILE__
    //__LINE__
    echo __FILE__;
  ?>
</body>
</html>