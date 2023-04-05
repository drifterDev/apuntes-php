<?php
$lista=[];
for ($i=1;$i<1000;$i++){
  if (sizeof($lista)<120){
    array_push($lista, $i);
  }else{
    break;
  }
}
var_dump($lista);

?>