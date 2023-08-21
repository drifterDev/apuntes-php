<?php
// Autor: Mateo Álvarez Murillo
// Fecha de creación: 2023

// Este código se proporciona bajo la Licencia MIT.
// Para más información, consulta el archivo LICENSE en la raíz del repositorio. 

function get_person_info($name, $age, $country)
{
  echo "Tengo la información de $name, tiene $age años y vive en $country";
}

// Sin importar el orden
get_person_info(
  age: 19,
  country: "Colombia",
  name: "Mateo"
);

echo "\n";
