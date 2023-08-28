<?php

// Autor: Mateo Álvarez Murillo
// Fecha de creación: 2023

// Este código se proporciona bajo la Licencia MIT.
// Para más información, consulta el archivo LICENSE en la raíz del repositorio. 

$contador = 1;

while ($contador <= 10) {
  echo "Actualmente estamos en la iteración $contador \n";
  $contador++;
}

echo "\n";

$usernames = ["user1", "user2", "user3"];
do {
  $username = readline("Por favor, ingresa tu nuevo nombre de usuario: ");
} while (in_array($username, $usernames));

echo "\n";

for ($i = 0, $j = 0; $i < 10; $i++, $j += 2) {
  // Escribir todo nuestro código
  echo "i = $i j = $j" . "\n";
}

echo "\n";

for ($i = 0; $i < 10; $i++) {
  echo "iteración #" . ($i + 1) . "\n";
}

echo "\n";

$tiendita_de_cafes = array(
  "Americano" => 20,
  "Latte" => 25,
  "Capuccino" => 27.5,
  "Mocca" => 24
);

foreach ($tiendita_de_cafes as $cafe => $price)
  echo "El café $cafe cuesta $$price USD \n";


echo "\n";
