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
  <title>Tipos input</title>
</head>

<body>
  <h1>Tipos de input</h1>
  <form action="" method="POST">
    <label for="nombre">Nombre: </label><br><br>
    <input type="text" name="nombre" /><br><br>
    <label for="sexo">checkbox: </label><br><br>
    <!--CHECKED ES PARA APARECER YA CHULEADO-->
    <input type="checkbox" name="sexo" value="Hombre" checked="checked" />Hombre<br><br>
    <input type="checkbox" name="sexo" value="Mujer" />Mujer<br><br>
    <label for="color">Color: </label><br><br>
    <input type="color" name="color"><br><br>
    <label for="date">Date: </label><br><br>
    <input type="date" name="date"><br><br>
    <label for="mail">Email: </label><br><br>
    <input type="email" name="mail"><br><br>
    <label for="file">Archivo: </label><br><br>
    <!--EL ATRIBUTO MULTIPLE ES PARA SELECCIONAR MULTIPLES ARCHIVOS-->
    <input type="file" name="file" multiple="multiple" /><br><br>
    <label for="hide">Oculto: </label><br><br>
    <input type="hidden" name="hide"><br><br>
    <label for="numero">Numero: </label><br><br>
    <input type="number" name="numero"><br><br>
    <label for="password">Password: </label><br><br>
    <input type="password" name="password"><br><br>
    <label for="lista">Radio: </label><br><br>
    <input type="radio" name="lista" value="Brasil">Brasil<br><br>
    <input type="radio" name="lista" value="Argentina">Argentina<br><br>
    <input type="radio" name="lista" value="Mexico">Mexico<br><br>
    <input type="radio" name="lista" value="Colombia">Colombia<br><br>
    <label for="url">Url: </label><br><br>
    <input type="url" name="url"><br><br>
    <label for="descripcion">Textarea: </label><br><br>
    <textarea name="descripcion" cols="30" rows="10"></textarea><br><br>
    <label for="libros">Select: </label><br><br>
    <select name="libros">
      <option value="imperio">Imperio final</option>
      <option value="pozo">Pozo de la ascension</option>
      <option value="heroe">El heroe de las eras</option>
      <option value="barco">El barco de los muertos</option>
      <option value="historia">Historia secreta</option>
    </select><br><br>
    <input type="submit" value="Enviar" />
  </form>

</body>

</html>