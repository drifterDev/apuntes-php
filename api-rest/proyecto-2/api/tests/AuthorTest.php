<?php

require 'vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use GuzzleHttp\Client;

class AuthorTest extends TestCase
{
  public function testGet()
  {
    $client = new Client();
    $url = 'http://localhost/api/authors';
    $response = $client->get($url);
    $this->assertEquals(200, $response->getStatusCode());
  }

  public function testPost()
  {
    $client = new Client();
    $url = 'http://localhost/api/authors';
    $data = [
      'age' => 23,
      'name' => 'Prueba 1',
      'country_id' => 1
    ];
    $response = $client->post($url, [
      'json' => $data
    ]);

    $this->assertEquals(201, $response->getStatusCode());
    $responseData = json_decode($response->getBody(), true);

    $this->assertArrayHasKey('id', $responseData);
    $this->assertArrayHasKey('age', $responseData);
    $this->assertArrayHasKey('name', $responseData);
    $this->assertArrayHasKey('nationality', $responseData);
    $this->assertArrayHasKey('books', $responseData);
    $this->assertEquals($data['age'], $responseData['age']);
    $this->assertEquals($data['name'], $responseData['name']);
  }

  public function testShow()
  {
    $client = new Client();
    $url = 'http://localhost/api/authors/1';
    $response = $client->get($url);
    $responseData = json_decode($response->getBody(), true);
    $this->assertEquals(200, $response->getStatusCode());
    $this->assertArrayHasKey('id', $responseData);
    $this->assertArrayHasKey('age', $responseData);
    $this->assertArrayHasKey('name', $responseData);
    $this->assertArrayHasKey('nationality', $responseData);
    $this->assertArrayHasKey('books', $responseData);
  }

  public function testDelete()
  {

    $client = new Client();
    $url = 'http://localhost/api/authors';
    $data = [
      'age' => 23,
      'name' => 'Prueba 1',
      'country_id' => 1
    ];
    $response = $client->post($url, [
      'json' => $data
    ]);
    $this->assertEquals(201, $response->getStatusCode());
    $responseData = json_decode($response->getBody(), true);
    $url = 'http://localhost/api/authors/' . $responseData['id'];
    $response = $client->delete($url);
    $this->assertEquals(204, $response->getStatusCode());
  }

  public function testUpdate()
  {
    $client = new Client();
    $url = 'http://localhost/api/authors';
    $data = [
      'age' => 23,
      'name' => 'Prueba 1',
      'country_id' => 1
    ];
    $response = $client->post($url, [
      'json' => $data
    ]);
    $this->assertEquals(201, $response->getStatusCode());
    $responseData = json_decode($response->getBody(), true);
    $url = 'http://localhost/api/authors/' . $responseData['id'];
    $data = [
      'age' => 24,
      'name' => 'Prueba 2',
      'country_id' => 2
    ];
    $response = $client->put($url, [
      'json' => $data
    ]);
    $this->assertEquals(200, $response->getStatusCode());
    $responseData = json_decode($response->getBody(), true);
    $this->assertEquals($data['age'], $responseData['age']);
    $this->assertEquals($data['name'], $responseData['name']);
  }
}
