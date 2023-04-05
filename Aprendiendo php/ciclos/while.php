<?php
  $n1=1;
  if (isset($_GET['numero'])){
    $n2=(int) $_GET['numero'];
  }else{
    $n2=0;
  }
  echo '<h1>La tabla de multiplicar de '.$n2.'</h1><br/>';
  while($n1<=10){
    echo $n1.'x'.$n2.' = '.($n1*$n2).'<br/>';
    $n1++;
    $n2;
 }

 for ($i =1;$i <= $n2;$i++){
  echo 'Estoy cargando... ('.$i.'%)<br/>';
 }
 echo 'CARGUE :D';

?>
