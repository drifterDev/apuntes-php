<?php

namespace App\Controllers;

use App\Models\Country;

class CountryController
{
  private $country;

  public function __construct()
  {
    $this->country = new Country();
  }

  public function get($id = null)
  {
    if (isset($id)) {
      $country = $this->country->get($id);
      return json_encode($country);
    }
    $countries = $this->country->get_all();
    return json_encode($countries);
  }

  public function post($data)
  {
    if (!isset($data['name'])) {
      http_response_code(400);
      return json_encode(['error' => 'Invalid data']);
    }
    if ($data['name'] == '') {
      http_response_code(400);
      return json_encode(['error' => 'Invalid data']);
    }
    $country = $this->country->create($data);
    return json_encode($country);
  }

  public function delete($id)
  {
    if (!isset($id) || !is_numeric($id)) {
      http_response_code(400);
      return json_encode(['error' => 'Invalid data']);
    }
    $data = $this->country->delete($id);
    return json_encode($data);
  }

  public function put($id, $data)
  {
    if (!isset($id) || !isset($data['name'])) {
      http_response_code(400);
      return json_encode(['error' => 'Invalid data']);
    }
    if (!is_numeric($id) || $data['name'] == '') {
      http_response_code(400);
      return json_encode(['error' => 'Invalid data']);
    }
    $country = $this->country->update($id, $data);
    http_response_code(200);
    return json_encode($country);
  }
}
