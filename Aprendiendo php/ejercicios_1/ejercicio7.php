<?php

$n=1;
if (isset($_GET['numero1']) && isset($_GET['numero2'])){
  $n1 = $_GET['numero1'];
  $n2 = $_GET['numero2'];
  for ($i = $n1;$i <= $n2; $i++){
    if ($i==$n2 && $i %2!=0){
      echo 'Numero #'.$n.' = '.$i;
    }elseif ($i % 2 !=0){
      echo 'Numero #'.$n.' = '.$i.'<br/>';
    }
    $n++;
  }
}else{
  echo 'Los valores de los numeros no han sido asignados';
}
?>