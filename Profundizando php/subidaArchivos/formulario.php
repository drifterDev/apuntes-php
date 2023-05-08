<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Subida de archivos</title>
</head>
<body>
  <h1>Subida de archivos con PHP</h1>
  <form action="upload.php" method="POST" enctype="multipart/form-data">
    <label for="archivo">Archivo para enviar al servidor</label><br>
    <input type="file" name="archivo"><br>
    <input type="submit" value="Enviar">
  </form>
  <h1>Imagenes que han sido subidas</h1>
  <?php
  $gestor=opendir("./imagenes");
    // if($gestor){
    //   while(($image=readdir($gestor))!=false){
    //     if ($image != "." && $image!=".."){
    //       echo "<img src='imagenes/$image' width='200px'/><br/>";
    //     }
    //   }
    // }

    //Más recomendable cuando estamos hablando de algo visual
    if($gestor):
      while(($image=readdir($gestor))!=false):
        if ($image != "." && $image!=".."):
          echo "<img src='imagenes/$image' width='200px'/><br/>";
        endif;
      endwhile;
    endif;
  ?>
</body>
</html>