<?php

// Autor: Mateo Álvarez Murillo
// Fecha de creación: 2023

// Este código se proporciona bajo la Licencia MIT.
// Para más información, consulta el archivo LICENSE en la raíz del repositorio.

// use App\Controllers\IngresosController;
use App\Controllers\RetirosController;
// use App\Enums\IngresoTipoEnum;
use App\Enums\MetodoPagoEnum;
use App\Enums\RetiroTipoEnum;

require("vendor/autoload.php");

// $ingresos_controller = new IngresosController();
// $ingresos_controller->store([
//   "metodo_pago" => MetodoPagoEnum::TarjetaCredito->value,
//   "tipo" => IngresoTipoEnum::Devolucion->value,
//   "fecha" => date("Y-m-d H:i:s"), //Formato para timestamp sql
//   "cantidad" => 250000,
//   "descripcion" => "Devolucion de una compra fallida"
// ]);

$retiros_controller = new RetirosController();
$retiros_controller->store([
  "metodo_pago" => MetodoPagoEnum::TarjetaCredito->value,
  "tipo" => RetiroTipoEnum::Compra->value,
  "fecha" => date("Y-m-d H:i:s"), //Formato para timestamp sql
  "cantidad" => 300000,
  "descripcion" => "Se ha comprado mucha ropa para mascotas"
]);
