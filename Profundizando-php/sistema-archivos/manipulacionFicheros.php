<?php


// Autor: Mateo Álvarez Murillo
// Fecha de creación: 2023

// Este código se proporciona bajo la Licencia MIT.
// Para más información, consulta el archivo LICENSE en la raíz del repositorio. 


//Copiar archivos
copy("fichero1.txt", "fichero2.txt") or die("Error al copiar");

//Renombrar archivos
rename("fichero2.txt", "ficheroCopiado.txt");

//Eliminar archivos
unlink("ficheroCopiado.txt") or die("Error al eliminar");

?>