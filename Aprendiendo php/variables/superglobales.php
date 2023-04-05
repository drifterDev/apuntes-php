<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Variables super globales</title>
</head>
<body>
  <h1>Variables super globales</h1>
  <?php
  /**
   * VARIABLES SUPER GLOBALES
   */
    echo $_SERVER['SERVER_SOFTWARE'].'<br/>';
    echo $_SERVER['SERVER_NAME'].'<br/>';
    echo $_SERVER['HTTP_USER_AGENT'].'<br/>';
    echo $_SERVER['REMOTE_ADDR'].'<br/>';
  ?>
</body>
</html>