<!--
Autor: Mateo Álvarez Murillo
Fecha de creación: 2023

Este código se proporciona bajo la Licencia MIT.
Para más información, consulta el archivo LICENSE en la raíz del repositorio. 
-->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario</title>
</head>
<body>
  <h1>Formulario</h1>
<!--LO DE MULTIPART ES PARA QUE PUEDA GUARDAR FICHEROS Y ESAS COSAS-->
  <form action="" method="POST" enctype="multipart/form-data">
    <label for="nombre">Nombre: </label><br><br>
  <!--DISABLED ES PARA DESABILITAR UN CAMPO DE UN FORMULARIO-->
    <input type="text" name="nombre" disabled="disabled" placeholder="Nombre..."/><br/><br>
    <label for="apellido">Apellido: </label><br><br>
  <!--AUTOFOCUS PARA QUE SE SELECCIONE AUTOMATICAMENTE-->
  <!--MINLENGTH Y MAXLENGTH ES PARA PONER UN LIMITE AL TAMAÑO DE LA RESPUESTA-->
    <input type="text" name="apellido" autofocus="autofocus" maxlength="20" placeholder="Apellido..."/><br/><br>
  <!--EXPRESIONES REGULARES EN EL CAMPO PATTERN-->
  <!--REQUIRED ES UN ATRIBUTO QUE NESESITA SER LLENADO PARA ENVIAR EL FORM-->
  <label for="edad">Edad: </label><br><br>
  <input type="text" name="edad" pattern="[A-Z]+" required="required" value="Edad..."/><br><br>
    <input type="submit" value="Enviar"/>
  </form>
</body>
</html>