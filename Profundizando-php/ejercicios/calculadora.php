<?php


// Autor: Mateo Álvarez Murillo
// Fecha de creación: 2023

// Este código se proporciona bajo la Licencia MIT.
// Para más información, consulta el archivo LICENSE en la raíz del repositorio. 


if (isset($_POST['numero1']) && isset($_POST['numero2'])){
  if(isset($_POST['sumar'])){
    $operacion=$_POST['numero1']+$_POST['numero2'];
    header("Location:ejercicio3.php?mensaje=".$operacion);
  }elseif(isset($_POST['restar'])){
    $operacion=$_POST['numero1']-$_POST['numero2'];
    header("Location:ejercicio3.php?mensaje=".$operacion);
  } elseif(isset($_POST['multiplicar'])){
    $operacion=$_POST['numero1']*$_POST['numero2'];
    header("Location:ejercicio3.php?mensaje=".$operacion);
  } elseif(isset($_POST['dividir']) && $_POST['numero2']!=0){
    $operacion=$_POST['numero1']/$_POST['numero2'];
    header("Location:ejercicio3.php?mensaje=".$operacion);
  } else{
    $operacion="No se hizo nada";
    header("Location:ejercicio3.php?mensaje=".$operacion);
  } 
}

?>