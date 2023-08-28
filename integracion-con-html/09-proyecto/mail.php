<!-- Autor: Mateo Álvarez Murillo
Fecha de creación: 2023

Este código se proporciona bajo la Licencia MIT.
Para más información, consulta el archivo LICENSE en la raíz del repositorio. -->

<?php

use PHPMailer\PHPMailer\PHPMailer;

require("../vendor/autoload.php");
function sendMail($name, $email, $subject, $body, $html = false)
{
  //Configuración inicial
  $phpmailer = new PHPMailer();
  // $phpmailer->isSMTP();
  // $phpmailer->Host = ;
  // $phpmailer->SMTPAuth = ;
  // $phpmailer->Port = ;
  // $phpmailer->Username = ;
  // $phpmailer->Password = ;

  // Añadiendo destinatarios
  $phpmailer->setFrom('contact@empresa.com', 'Empresa falsa');
  $phpmailer->addAddress($email, $name);     //Add a recipient

  $phpmailer->isHTML($html);                                  //Set email format to HTML
  $phpmailer->Subject = $subject;
  $phpmailer->Body    = $body;

  // Mandar correo
  $phpmailer->send();
}

?>