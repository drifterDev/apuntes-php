<?php

// Autor: Mateo Álvarez Murillo
// Fecha de creación: 2023

// Este código se proporciona bajo la Licencia MIT.
// Para más información, consulta el archivo LICENSE en la raíz del repositorio.

use App\Controllers\IngresosController;
use App\Enums\IngresoTipoEnum;
use App\Enums\MetodoPagoEnum;

require("vendor/autoload.php");

$ingresos_controller = new IngresosController();
$ingresos_controller->store([
  "metodo_pago" => MetodoPagoEnum::CuentaAhorro->value,
  "tipo" => IngresoTipoEnum::Salario->value,
  "fecha" => date("Y-m-d H:i:s"), //Formato para timestamp sql
  "cantidad" => 100000,
  "descripcion" => "Pago del salario del empleado"
]);
