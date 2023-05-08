<?php

//Copiar archivos
copy("fichero1.txt", "fichero2.txt") or die("Error al copiar");

//Renombrar archivos
rename("fichero2.txt", "ficheroCopiado.txt");

//Eliminar archivos
unlink("ficheroCopiado.txt") or die("Error al eliminar");

?>