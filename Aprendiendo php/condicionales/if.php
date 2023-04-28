<?php

/*
 * MIT License
 *
 * Copyright (c) 2023 Mateo Álvarez Murillo
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 * 
 * This software and associated files are subject to the terms and conditions of
 * the MIT License and are included in this distribution. A copy of the license
 * can be found in the file LICENSE in the root of this distribution.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 */

  /**
   * == igual
   * === identico
   * != distinto
   * !== no identico
   */
  echo '<h1>IF, ELSEIF, ELSE</h1>';
  $year=2033;
   if ($year!=2022){
    echo 'Pantalones azules';
   } elseif($year<=2021){
    echo 'Camiseta gris';
   } else{
    echo 'Zapatos naranjas';
   }
   /**
    * && (and)
    * || (or)
    * ! (not)
    */
   echo '<hr/>';
  echo '<h1>SWITCH</h1>';
    $color = "Azul";
    switch($color){
      case "Azul":
        echo 'El cielo y el mar son azules';
        break;
      case "Verde":
        echo 'Las praderas y los campos son verdes';
        break;
      default:
        echo "Contaminación en todas partes";
        break;
    }

    //GOTO
    goto marca;
    echo '<p>Hola #1</p>';
    echo '<p>Hola #2</p>';
    echo '<p>Hola #3</p>';
    echo '<p>Hola #4</p>';

    marca:
    echo '<p>Me he saltado 4 lineas de codigo</p>';
?>
