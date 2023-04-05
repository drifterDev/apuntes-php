<?php
  /**
   * == igual
   * === identico
   * != distinto
   * !== no identico
   */
  echo '<h1>IF, ELSEIF, ELSE</h1>';
  $year=2033;
   if ($year!=2022){
    echo 'Pantalones azules';
   } elseif($year<=2021){
    echo 'Camiseta gris';
   } else{
    echo 'Zapatos naranjas';
   }
   /**
    * && (and)
    * || (or)
    * ! (not)
    */
   echo '<hr/>';
  echo '<h1>SWITCH</h1>';
    $color = "Azul";
    switch($color){
      case "Azul":
        echo 'El cielo y el mar son azules';
        break;
      case "Verde":
        echo 'Las praderas y los campos son verdes';
        break;
      default:
        echo "Contaminación en todas partes";
        break;
    }

    //GOTO
    goto marca;
    echo '<p>Hola #1</p>';
    echo '<p>Hola #2</p>';
    echo '<p>Hola #3</p>';
    echo '<p>Hola #4</p>';

    marca:
    echo '<p>Me he saltado 4 lineas de codigo</p>';
?>
