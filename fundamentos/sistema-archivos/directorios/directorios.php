<?php

// Autor: Mateo Álvarez Murillo
// Fecha de creación: 2023

// Este código se proporciona bajo la Licencia MIT.
// Para más información, consulta el archivo LICENSE en la raíz del repositorio. 


//Creación directorios
if (!is_dir("carpeta")) {
  mkdir("carpeta", "0777") or die("No se pudo crear la carpeta");
} else {
  echo "Ya existe la carpeta</br>";
}

echo "<h3>Contenido de la carpeta</h3>";

//abre la carpeta
if ($gestor = opendir("./carpeta")) {
  //recorre la carpeta
  while ($archivo = readdir($gestor)) {
    //comprueba que el archivo no sean los puntos
    if ($archivo != '.' && $archivo != '..') {
      echo $archivo . '</br>';
    }
  }
}

//Eliminando directorios
// rmdir("carpeta");
