<?php

// Autor: Mateo Álvarez Murillo
// Fecha de creación: 2023

// Este código se proporciona bajo la Licencia MIT.
// Para más información, consulta el archivo LICENSE en la raíz del repositorio. 

class EstudianteNoMatriculado extends Exception
{
  function mostrarMensaje()
  {
    return "Estudiante con falta de créditos";
  }
}

class EstudianteExpulsado extends Exception
{
  function mostrarAdvertencia()
  {
    return "El estudiante ha sido expulsado";
  }
}

try {
  $excepcion = readline("Excepción a lanzar: ");
  if ($excepcion == "expulsado") {
    throw new EstudianteExpulsado("Estudiante expulsado");
  } else {
    throw new EstudianteNoMatriculado("Estudiante no matriculado");
  }
} catch (EstudianteNoMatriculado $th) {
  echo $th->getMessage() . "\n";
  echo $th->mostrarMensaje();
} catch (EstudianteExpulsado $th) {
  echo $th->getMessage() . "\n";
  echo $th->mostrarAdvertencia();
} finally {
  echo "\nFin";
}
