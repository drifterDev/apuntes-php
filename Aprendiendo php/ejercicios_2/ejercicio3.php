<?php
$word="Mundo";
if (isset($_GET['palabra'])){
  $word=$_GET['palabra'];
  echo 'La palabra que quiero decir es '.$word;
} else{
echo 'La palabra que quiero decir es <strong>'.strtolower($word).'</strong>';
}

?>