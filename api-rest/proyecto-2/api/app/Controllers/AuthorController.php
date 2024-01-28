<?php

namespace App\Controllers;

use App\Models\Author;

class AuthorController
{
  private $author;

  public function __construct()
  {
    $this->author = new Author();
  }

  public function get($id = null)
  {
    if (isset($id)) {
      $author = $this->author->get($id);
      return json_encode($author);
    }
    $authors = $this->author->get_all();
    return json_encode($authors);
  }

  public function post($data)
  {
    if (!isset($data['name']) || !isset($data['country_id']) || !isset($data['age'])) {
      http_response_code(400);
      return json_encode(['error' => 'Invalid data']);
    }
    if (!is_numeric($data['country_id']) || !is_numeric($data['age']) || $data['name'] == '') {
      http_response_code(400);
      return json_encode(['error' => 'Invalid data']);
    }
    $author = $this->author->create($data);
    if (is_string($author)) {
      http_response_code(400);
      return json_encode(['error' => $author]);
    }
    http_response_code(201);
    return json_encode($author);
  }

  public function delete($id)
  {
    if (!isset($id) || !is_numeric($id)) {
      http_response_code(400);
      return json_encode(['error' => 'Invalid data']);
    }
    $data = $this->author->delete($id);
    return json_encode($data);
  }

  public function put($id, $data)
  {
    if (!isset($id) || !isset($data['name']) || !isset($data['country_id']) || !isset($data['age'])) {
      http_response_code(400);
      return json_encode(['error' => 'Invalid data']);
    }
    if (!is_numeric($id) || !is_numeric($data['country_id']) || !is_numeric($data['age']) || $data['name'] == '') {
      http_response_code(400);
      return json_encode(['error' => 'Invalid data']);
    }
    $author = $this->author->update($id, $data);
    http_response_code(200);
    return json_encode($author);
  }
}
