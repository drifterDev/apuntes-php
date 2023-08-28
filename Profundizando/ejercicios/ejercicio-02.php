<?php


// Autor: Mateo Álvarez Murillo
// Fecha de creación: 2023

// Este código se proporciona bajo la Licencia MIT.
// Para más información, consulta el archivo LICENSE en la raíz del repositorio. 


function validarEmail($email)
{
  if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "El Email esta bien diligenciado<br/>";
  } else {
    echo "El Email esta mal escrito, compruebalo otra vez";
  }
}

if (isset($_GET['email'])) {
  validarEmail($_GET['email']);
} else {
  echo "Envia algo por GET";
}
