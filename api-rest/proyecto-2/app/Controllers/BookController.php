<?php

namespace App\Controllers;

use App\Models\Book;

class BookController
{
  private $book;

  public function __construct()
  {
    $this->book = new Book();
  }

  public function get($id = null)
  {
    if (isset($id)) {
      $book = $this->book->get($id);
      return json_encode($book);
    }
    $books = $this->book->get_all();
    return json_encode($books);
  }

  public function post($data)
  {
    if (!isset($data['title']) || !isset($data['author_id'])) {
      http_response_code(400);
      return json_encode(['error' => 'Invalid data']);
    }
    if (!is_numeric($data['author_id']) || $data['title'] == '') {
      http_response_code(400);
      return json_encode(['error' => 'Invalid data']);
    }
    $book = $this->book->create($data);
    http_response_code(201);
    return json_encode($book);
  }

  public function delete($id)
  {
    if (!isset($id) || !is_numeric($id)) {
      http_response_code(400);
      return json_encode(['error' => 'Invalid data']);
    }
    $data = $this->book->delete($id);
    return json_encode($data);
  }

  public function put($id, $data)
  {
    if (!isset($id) || !isset($data['title']) || !isset($data['author_id'])) {
      http_response_code(400);
      return json_encode(['error' => 'Invalid data']);
    }
    if (!is_numeric($id) || !is_numeric($data['author_id']) || $data['title'] == '') {
      http_response_code(400);
      return json_encode(['error' => 'Invalid data']);
    }
    $book = $this->book->update($id, $data);
    http_response_code(200);
    return json_encode($book);
  }
}
