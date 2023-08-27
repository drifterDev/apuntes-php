<?php

namespace Router;

class RouterHandler
{
  protected $method;
  protected $data;

  public function set_method($method)
  {
    $this->method = $method;
  }

  public function set_data($data)
  {
    $this->data = $data;
  }

  public function route($controller, $id)
  {
    $resorce = new $controller();

    switch ($this->method) {
      case 'get':
        if ($id && $id == "create") {
          $resorce->create();
        } else if ($id) {
          $resorce->show($id);
        } else {
          $resorce->index();
        }
        break;
      case 'post':
        $resorce->store($this->data);
        break;
      case 'delete':
        $resorce->destroy($id);
        break;
      default:
        # code...
        break;
    }
  }
}
