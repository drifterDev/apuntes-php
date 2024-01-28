<?php

namespace App\Models;

use Database\Connection;

class Book
{
  private $connection;
  private $table = 'books';

  public function __construct()
  {
    $this->connection = Connection::getInstance()->get_database_instance();
  }

  public function get_all()
  {
    $query = 'SELECT b.id, b.title, a.name AS \'author\'' .
      'FROM books b INNER JOIN authors a ON b.author_id = a.id';
    $result = $this->connection->query($query);
    $countries = [];
    while ($country = $result->fetch_assoc()) {
      $countries[] = $country;
    }
    return $countries;
  }

  public function get($id)
  {
    $query = 'SELECT b.id, b.title, a.name AS \'author\'' .
      'FROM books b INNER JOIN authors a ON b.author_id = a.id ' .
      'WHERE b.id = ' . $id;
    $result = $this->connection->query($query);
    $book = $result->fetch_assoc();
    return $book;
  }

  public function create($data)
  {
    try {
      $query = 'INSERT INTO ' . $this->table . ' (title, author_id) VALUES (?, ?)';
      $stmt = $this->connection->prepare($query);
      $stmt->bind_param('si', $data['title'], $data['author_id']);
      $stmt->execute();
      $id = $stmt->insert_id;
      $stmt->close();
      return $this->get($id);
    } catch (\Exception $e) {
      return ['error' => 'Invalid data'];
    }
  }

  public function delete($id)
  {
    try {
      $query = 'DELETE FROM ' . $this->table . ' WHERE id=?';
      $stmt = $this->connection->prepare($query);
      $stmt->bind_param('i', $id);
      $stmt->execute();
      $stmt->close();
      http_response_code(204);
      return [];
    } catch (\Exception $e) {
      http_response_code(400);
      return ['error' => 'Invalid data'];
    }
  }

  public function update($id, $data)
  {
    try {
      $query = 'UPDATE ' . $this->table .
        ' SET title = ? , ' .
        'author_id = ? ' .
        'WHERE id = ?;';
      $stmt = $this->connection->prepare($query);
      $stmt->bind_param('sii', $data['title'], $data['author_id'], $id);
      $stmt->execute();
      $stmt->close();
      $book = $this->get($id);
      http_response_code(200);
      return $book;
    } catch (\Exception $e) {
      http_response_code(400);
      return ['error' => 'Invalid data'];
    }
  }
}
