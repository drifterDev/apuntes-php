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


//Accedemos al archivo
$file=$_FILES['archivo'];
$nombre=$file['name'];
$tipo=$file['type'];

//Comprobamos el tipo de archivo
if ($tipo=="image/jpg" || $tipo=="image/jpeg" || $tipo=="image/png" || $tipo=="image/gif"){
  //Comprobamos que la carpeta exista
  if (!is_dir("imagenes")){
    mkdir("imagenes", 0777);
  }
  //Subimos el archivo
  move_uploaded_file($file['tmp_name'], 'imagenes/'.$nombre);
  echo "<h1>Archivo subido correctamente</h1>";
  header("Refresh: 5; URL=formulario.php");
}else{

  header("Refresh: 5; URL=formulario.php");
  echo "<h1>Sube una imagen con formato adeacuado...</h1>";
}


?>