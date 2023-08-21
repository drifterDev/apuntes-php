<?php
// Autor: Mateo Álvarez Murillo
// Fecha de creación: 2023

// Este código se proporciona bajo la Licencia MIT.
// Para más información, consulta el archivo LICENSE en la raíz del repositorio. 

// declare(strict_types=1);
// Si se pone la anterior linea todo el archivo deberá tener 
// declaraciones escalares y de devolucion

// Tipo escalar (parametros)
function calcular_area_triangulo(int $base, int $altura)
{
  return ($base * $altura) / 2;
}

// Tipo devolución (return)
function suma($n1, $n2): int
{
  return $n1 + $n2;
}
