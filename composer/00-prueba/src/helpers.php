<?php

// Autor: Mateo Álvarez Murillo
// Fecha de creación: 2023

// Este código se proporciona bajo la Licencia MIT.
// Para más información, consulta el archivo LICENSE en la raíz del repositorio. 

if (!function_exists("upper")) {
  function upper($value)
  {
    return Text\Format::upperText($value);
  }
}

if (!function_exists("lower")) {
  function lower($value)
  {
    return Text\Format::lowerText($value);
  }
}
