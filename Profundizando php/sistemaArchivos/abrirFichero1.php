<?php
//Abrir un archivo
//Lectura y escritura
$abrirArchivo=fopen("fichero1.txt", "a+");

//Lectura
// $abrirArchivo=fopen("fichero1.txt", "r");

//Escritura
// $abrirArchivo=fopen("fichero1.txt", "w");


//Lectura de contenido archivo

while(!feof($abrirArchivo)){
  $contenidoArchivo=fgets($abrirArchivo);
  echo $contenidoArchivo.'</br>';
}


//Escribiendo en un archivo
fwrite($abrirArchivo, "Añadiendo un texto al archivo");

//Cerrando un archivo
fclose($abrirArchivo);

?>