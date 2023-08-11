<!-- Autor: Mateo Álvarez Murillo
Fecha de creación: 2023

Este código se proporciona bajo la Licencia MIT.
Para más información, consulta el archivo LICENSE en la raíz del repositorio. -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tipos de input</title>
</head>

<body>
  <form action="./server.php" method="post" enctype="multipart/form-data">
    <!-- input simple -->
    <label for="nombre">Nombre: </label>
    <input type="text" name="nombre" id="nombre"><br><br>

    <!-- input arreglo -->
    <label for="users">Users: </label><br>
    <input type="text" name="users[]" placeholder="user #1"><br>
    <input type="text" name="users[]" placeholder="user #2"><br>
    <input type="text" name="users[]" placeholder="user #3"><br><br>

    <!-- input asociativo -->
    <label for="persona">Person: </label><br>
    <input type="text" name="persona[nombre]" placeholder="Nombre"><br>
    <input type="text" name="persona[apellido1]" placeholder="Primer apellido"><br>
    <input type="text" name="persona[apellido2]" placeholder="Segundo apellido"><br><br>


    <!-- input checkbox -->
    <input type="checkbox" name="lista1" value="Fue clicado #1">
    <input type="checkbox" name="lista2">
    <input type="checkbox" name="lista3">

    <!-- input radio -->
    <br><br>
    <label for="co">Colombia</label>
    <input type="radio" name="pais" value="co">
    <label for="mx">Mexico</label>
    <input type="radio" name="pais" value="mx">
    <label for="ag">Argentina</label>
    <input type="radio" name="pais" value="ag"><br>

    <!-- multiples archivos -->
    <label for="galeria">Carga tus imagenes</label>
    <input type="file" multiple name="galeria[]" id="galeria"><br>
    <button type="submit">Enviar form</button>
  </form>
</body>

</html>