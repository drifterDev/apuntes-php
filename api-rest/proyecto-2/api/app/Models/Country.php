<?php

namespace App\Models;

use Database\Connection;

class Country
{
  private $connection;
  private $table = 'countries';

  public function __construct()
  {
    $this->connection = Connection::getInstance()->get_database_instance();
  }

  public function get_all()
  {
    $query = 'SELECT c.*, COUNT(DISTINCT a.id) as \'authors\', ' .
      'COUNT(b.id) as \'books\' FROM countries c ' .
      'LEFT OUTER JOIN authors a ON c.id = a.country_id ' .
      'LEFT OUTER JOIN books b ON b.author_id = a.id ' .
      'GROUP BY c.id;';
    $result = $this->connection->query($query);
    $countries = [];
    while ($country = $result->fetch_assoc()) {
      $countries[] = $country;
    }
    return $countries;
  }

  public function get($id)
  {
    $query = 'SELECT c.*, COUNT(DISTINCT a.id) as \'authors\', ' .
      'COUNT(b.id) as \'books\' FROM countries c ' .
      'LEFT OUTER JOIN authors a ON c.id = a.country_id ' .
      'LEFT OUTER JOIN books b ON b.author_id = a.id ' .
      'WHERE c.id=' . $id . ' ' .
      'GROUP BY c.id;';
    $result = $this->connection->query($query);
    $country = $result->fetch_assoc();
    return $country;
  }

  public function create($data)
  {
    try {
      $query = 'INSERT INTO ' . $this->table . ' (name) VALUES (?)';
      $stmt = $this->connection->prepare($query);
      $stmt->bind_param('s', $data['name']);
      $stmt->execute();
      $id = $stmt->insert_id;
      $stmt->close();
      http_response_code(201);
      return $this->get($id);
    } catch (\Exception $e) {
      http_response_code(400);
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
        ' SET name = ? ' .
        'WHERE id = ?;';
      $stmt = $this->connection->prepare($query);
      $stmt->bind_param('si', $data['name'], $id);
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
