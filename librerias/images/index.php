<?php

// Autor: Mateo Álvarez Murillo
// Fecha de creación: 2023

// Este código se proporciona bajo la Licencia MIT.
// Para más información, consulta el archivo LICENSE en la raíz del repositorio.

namespace Images;

use PHPThumb\GD;

require __DIR__ . '\..\vendor\autoload.php';

$fotoOriginal = '\foto.jpg';
$guardarEn = 'fotoModificada.jpg';
$thumb = new GD(__DIR__ . $fotoOriginal);
$thumb->resize(50, 50);
$thumb->cropFromCenter(100);
$thumb->show();
$thumb->save($guardarEn);
