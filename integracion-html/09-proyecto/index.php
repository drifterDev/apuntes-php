<!-- Autor: Mateo Álvarez Murillo
Fecha de creación: 2023

Este código se proporciona bajo la Licencia MIT.
Para más información, consulta el archivo LICENSE en la raíz del repositorio. -->


<?php

require("mail.php");

function validate($name, $email, $subject, $message, $form)
{
  if (!empty($name) && !empty($email) && !empty($subject) && !empty($message)) {
    return true;
  } else {
    return false;
  }
}

$status = "";
if (isset($_POST["form"])) {
  if (validate(...$_POST)) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    //Mandar correo


    $status = "success";
  } else {
    $status = "danger";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="./styles.css" />
</head>

<body>
  <main>
    <?php if ($status == "danger") { ?>

      <div class="alert danger">
        <span>Surgió un problema</span>
      </div>
    <?php } else if ($status == "success") { ?>

      <div class="alert success">
        <span>¡Mensaje enviado con éxito!</span>
      </div>
    <?php } ?>
    <!-- de esta manera hacemos que se manden a si mismo -->
    <form action="./" method="post">
      <h1>¡Contáctanos!</h1>
      <div class="input-group">
        <label for="name">Nombre: </label>
        <input type="text" name="name" id="name" />
      </div>
      <div class="input-group">
        <label for="email">Correo: </label>
        <input type="text" name="email" id="email" />
      </div>
      <div class="input-group">
        <label for="subject">Asunto: </label>
        <input type="text" name="subject" id="subject" />
      </div>
      <div class="input-group">
        <label for="message">Mensaje: </label>
        <textarea name="message" id="message" cols="30" rows="10"></textarea>
      </div>
      <div class="button-container">
        <button name="form" type="submit">Enviar</button>
      </div>

      <div class="contact-info">
        <div class="info">
          <span><i class="fa-solid fa-location-dot"></i> 13 Saw Mill Cicle, North
            Olmested.</span>
        </div>
        <div class="info">
          <span><i class="fa-solid fa-phone"></i>+37 2418617834</span>
        </div>
      </div>
    </form>
  </main>
  <script src="https://kit.fontawesome.com/895570cd0e.js" crossorigin="anonymous"></script>
</body>

</html>