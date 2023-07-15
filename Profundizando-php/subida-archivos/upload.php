<?php

// Autor: Mateo Álvarez Murillo
// Fecha de creación: 2023

// Este código se proporciona bajo la Licencia MIT.
// Para más información, consulta el archivo LICENSE en la raíz del repositorio. 



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