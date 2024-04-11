<?php

// Autor: Mateo Álvarez Murillo
// Fecha de creación: 2023

// Este código se proporciona bajo la Licencia MIT.
// Para más información, consulta el archivo LICENSE en la raíz del repositorio. 


if (isset($_POST['titulo']) && isset($_POST['descripcion'])) {
  echo "<h1>" . $_POST['titulo'] . "</h1>";
  echo "<p>" . $_POST['descripcion'] . "</p>";
} else {
  echo "<strong>Hola mundo!</strong>";
}
