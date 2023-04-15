<?php

  if(isset($_POST['titulo']) && isset($_POST['descripcion'])){
    echo $_POST['titulo'];
    echo $_POST['descripcion'];
  }else{
    echo "Hola mundo!";
}

?>