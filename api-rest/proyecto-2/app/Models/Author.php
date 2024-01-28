<?php

namespace App\Models;

use Database\Connection;

class Author
{
  private $connection;
  private $table = 'authors';

  public function __construct()
  {
    $this->connection = Connection::getInstance()->get_database_instance();
  }

  public function get_all()
  {
    $query = 'SELECT a.id, a.age, a.name, c.name as \'nationality\', ' .
      '(SELECT GROUP_CONCAT(b.title SEPARATOR \', \') ' .
      'FROM books b WHERE b.author_id = a.id) as \'books\' ' .
      'FROM authors a INNER JOIN countries c ON c.id = a.country_id';
    $result = $this->connection->query($query);
    $countries = [];
    while ($country = $result->fetch_assoc()) {
      $countries[] = $country;
    }
    return $countries;
  }

  public function get($id)
  {
    $query = 'SELECT a.id, a.age, a.name, c.name as \'nationality\', ' .
      '(SELECT GROUP_CONCAT(b.title SEPARATOR \', \') ' .
      'FROM books b WHERE b.author_id = a.id) as \'books\' ' .
      'FROM authors a INNER JOIN countries c ON c.id = a.country_id ' .
      'WHERE a.id = ' . $id;
    $result = $this->connection->query($query);
    $author = $result->fetch_assoc();
    return $author;
  }

  public function create($data)
  {
    try {
      $query = 'INSERT INTO ' . $this->table . ' (name, country_id, age) VALUES (?, ?, ?)';
      $stmt = $this->connection->prepare($query);
      $stmt->bind_param('sii', $data['name'], $data['country_id'], $data['age']);
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
        ' SET name = ? , ' .
        'country_id = ? , ' .
        'age = ? ' .
        'WHERE id = ?;';
      $stmt = $this->connection->prepare($query);
      $stmt->bind_param('siii', $data['name'], $data['country_id'], $data['age'], $id);
      $stmt->execute();
      $stmt->close();
      http_response_code(200);
      return $this->get($id);
    } catch (\Exception $e) {
      http_response_code(400);
      return ['error' => 'Invalid data'];
    }
  }
}
