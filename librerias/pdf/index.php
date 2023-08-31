<?php

// Autor: Mateo Álvarez Murillo
// Fecha de creación: 2023

// Este código se proporciona bajo la Licencia MIT.
// Para más información, consulta el archivo LICENSE en la raíz del repositorio.
namespace PDF;

require __DIR__.'\..\vendor\autoload.php';

use Spipu\Html2Pdf\Html2Pdf;

// $html2pdf = new Html2Pdf();
// $html2pdf->writeHTML('<h1>HelloWorld</h1>This is my first test');
// $html2pdf->output();

// Recoger la vista para imprimir
ob_start();
require_once 'estructura.php';
$html=ob_get_clean();
$html2pdf = new Html2Pdf();
$html2pdf->writeHTML($html);
$html2pdf->output();