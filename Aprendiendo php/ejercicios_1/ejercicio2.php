<?php
  for($i=1;$i <101;$i++){
    if ($i % 2 == 0 && $i != 100){
      echo 'Par: '.$i.'<br/>';
    } elseif ($i % 2 ==0 && $i == 100){
      echo 'Par: '.$i;
    } else{
      continue;
    }
  }
?>