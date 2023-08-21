<?php
// Autor: Mateo Álvarez Murillo
// Fecha de creación: 2023

// Este código se proporciona bajo la Licencia MIT.
// Para más información, consulta el archivo LICENSE en la raíz del repositorio. 

function get_country_name($country)
{
  $name = "";
  switch ($country) {
    case 'MX':
      $name = "México";
      break;
    case 'CO':
      $name = "Colombia";
      break;
    case 'BR':
      $name = "Brasil";
      break;
    default:
      $name = 'España';
      break;
  }
  return $name;
}

function get_country_name_2($country)
{
  return match ($country) {
    "MX" => "México",
    "CO" => "Colombia",
    "BR" => "Brasil",
    default => "España"
  };
};

echo get_country_name("CO");
echo "\n";
echo get_country_name_2("AS");
