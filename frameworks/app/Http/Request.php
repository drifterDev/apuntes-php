<?php

// Autor: Mateo Álvarez Murillo
// Fecha de creación: 2023

// Este código se proporciona bajo la Licencia MIT.
// Para más información, consulta el archivo LICENSE en la raíz del repositorio.

namespace App\Http;

use Exception;

class Request
{
  protected $segments = [];
  protected $controller;
  protected $method;

  public function __construct()
  {
    $this->segments = explode('/', $_SERVER['REQUEST_URI']);
    $this->setMethod();
    $this->setController();
  }

  public function setController()
  {
    $this->controller = empty($this->segments[1])
      ? 'home'
      : $this->segments[1];
  }

  public function setMethod()
  {
    $this->method = empty($this->segments[2])
      ? 'index'
      : $this->segments[2];
  }

  public function getController()
  {
    // Uppercase
    $controller = ucfirst($this->controller);
    return "App\Http\Controllers\\{$controller}Controller";
  }

  public function getMethod()
  {
    return $this->method;
  }

  public function send()
  {
    $controller = $this->getController();
    $method = $this->getMethod();

    $response = call_user_func([
      new $controller,
      $method
    ]);
    try {
      if ($response instanceof Response) {
        $response->send();
      } else {
        throw new \Exception("Error al procesar la peticion");
      }
    } catch (\Throwable $th) {
      echo "Details: {$th->getMessage()}";
    }
  }
}
