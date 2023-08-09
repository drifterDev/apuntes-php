<?php

// Autor: Mateo Álvarez Murillo
// Fecha de creación: 2023

// Este código se proporciona bajo la Licencia MIT.
// Para más información, consulta el archivo LICENSE en la raíz del repositorio. 


//Abrir un archivo
//Lectura y escritura
$abrirArchivo = fopen("fichero1.txt", "a+");

//Lectura
// $abrirArchivo=fopen("fichero1.txt", "r");

//Escritura
// $abrirArchivo=fopen("fichero1.txt", "w");


//Lectura de contenido archivo

while (!feof($abrirArchivo)) {
  $contenidoArchivo = fgets($abrirArchivo);
  echo $contenidoArchivo . '</br>';
}


//Escribiendo en un archivo
fwrite($abrirArchivo, "Añadiendo un texto al archivo\n");

//Cerrando un archivo
fclose($abrirArchivo);
