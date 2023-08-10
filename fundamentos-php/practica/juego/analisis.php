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
$aciertos = 0;
foreach ($palabras as $p) {
  if ($p === $_REQUEST[$p]) {
    echo "Palabra correcta ✔<br/>";
    $aciertos += 1;
  } else {
    echo "Palabra incorrecta: $p<br/>";
  }
}
echo "</br>Cantidad de aciertos: $aciertos";
