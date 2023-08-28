<?php

$palabras = [
  "manzana",
  "guitarra",
  "universo",
  "playa",
  "perro",
  "universidad",
  "computadora",
  "libro",
  "ciudad",
  "flor"
];
$palabras_desorden = array();

foreach ($palabras as $p) {
  array_push($palabras_desorden, str_shuffle($p));
}

echo "
  <form action='analisis.php'>";
for ($i = 0; $i < count($palabras); $i++) {
  echo "<label for='word.[$i]'>La palabra: $palabras_desorden[$i]</label></br>
  <input type='text' name='$palabras[$i]' id='word.[$i]'></br></br>";
}

echo "<button type='submit'>Validar</button>
</form>";
