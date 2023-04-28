<!--
MIT License

Copyright (c) 2023 Mateo Álvarez Murillo

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
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