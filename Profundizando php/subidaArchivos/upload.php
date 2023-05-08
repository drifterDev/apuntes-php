<?php

$file=$_FILES['archivo'];
$nombre=$file['name'];
$tipo=$file['type'];


if ($tipo=="image/jpg" || $tipo=="image/jpeg" || $tipo=="image/png" || $tipo=="image/gif"){
  if (!is_dir("imagenes")){
    mkdir("imagenes", 0777);
  }

  move_uploaded_file($file['tmp_name'], 'imagenes/'.$nombre);
  echo "<h1>Archivo subido correctamente</h1>";
  header("Refresh: 5; URL=formulario.php");
}else{
  header("Refresh: 5; URL=formulario.php");
  echo "<h1>Sube una imagen con formato adeacuado...</h1>";
}


?>