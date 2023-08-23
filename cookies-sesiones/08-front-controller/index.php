<?php

// Autor: Mateo Álvarez Murillo
// Fecha de creación: 2023

// Este código se proporciona bajo la Licencia MIT.
// Para más información, consulta el archivo LICENSE en la raíz del repositorio. 

// El front controller maneja y gestiona las paticiones
$page = $_GET["page"] ?? "home";
require("pages/" . $page . ".php");
// switch ($page) {
//   case 'contact':
//     require("pages/contact.php");
//     break;
//   case 'home':
//     require("pages/home.php");
//     break;
//   case 'services':
//     require("pages/services.php");
//     break;
//   default:
//     require("pages/home.php");
//     break;
// }
