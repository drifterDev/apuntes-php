<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Operadores</title>
</head>
<body>
  <h1>Jugando con los operadores</h1>
  <?php
    $n1 = 2345;
    $n2 = 756;
    echo 'Suma: '.($n1+$n2).'<br/>';
    echo 'Resta: '.($n1-$n2).'<br/>';
    echo 'Multiplicación: '.($n1*$n2).'<br/>';
    echo 'División: '.($n1/$n2).'<br/>';
    echo 'Modulo: '.($n1%$n2).'<br/>';

    //Incremento o decremento
    echo '<h1>Jugando con incremento y decremento</h1>';
    $year = 2004;
    echo $year.'<br/>';
    $year++;
    echo $year.'<br/>';
    $year--;
    echo $year.'<br/>';
    $year-=43;
    echo $year.'<br/>';
    $year+=345;
    echo $year.'<br/>';

  ?>
</body>
</html>