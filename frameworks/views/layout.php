<!-- Autor: Mateo Álvarez Murillo
Fecha de creación: 2023

Este código se proporciona bajo la Licencia MIT.
Para más información, consulta el archivo LICENSE en la raíz del repositorio.-->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Intro Framework</title>
  <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>
  <nav class="p-10 w-full bg-blue-100">
    <h1 class=" text-xl pb-5">Introducción a Frameworks PHP</h1>
    <ul class="flex">
      <li class="pointer mr-5 border-b-5 hover:bg-blue-200 p-2">
        <a href="/home">Home</a>
      </li>
      <li class="pointer mr-5 border-b-5 hover:bg-blue-200 p-2">
        <a href="/contacts">Contacts</a>
      </li>
      <li class="pointer mr-5 border-b-5 hover:bg-blue-200 p-2">
        <a href="/services">Services</a>
      </li>
    </ul>
  </nav>

  <div class="container">
    <div class="p-10 flex flex-col">
      <div class=" border-2 border-black p-5">
        <?= $content ?>
      </div>
    </div>
  </div>
</body>

</html>