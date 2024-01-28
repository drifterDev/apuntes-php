<?php

require 'vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use GuzzleHttp\Client;

class BookTest extends TestCase
{
  public function testGet()
  {
    $client = new Client();
    $url = 'http://localhost/api/books';
    $response = $client->get($url);
    $this->assertEquals(200, $response->getStatusCode());
  }

  public function testPost()
  {
    $client = new Client();
    $url = 'http://localhost/api/books';
    $data = [
      'title' => 'Test Book',
      'author_id' => 1,
    ];
    $response = $client->post($url, [
      'json' => $data
    ]);

    $this->assertEquals(201, $response->getStatusCode());
    $responseData = json_decode($response->getBody(), true);

    $this->assertArrayHasKey('id', $responseData);
    $this->assertArrayHasKey('title', $responseData);
    $this->assertArrayHasKey('author', $responseData);
    $this->assertEquals($data['title'], $responseData['title']);
  }

  public function testShow()
  {
    $client = new Client();
    $url = 'http://localhost/api/books/1';
    $response = $client->get($url);
    $responseData = json_decode($response->getBody(), true);
    $this->assertEquals(200, $response->getStatusCode());
    $this->assertArrayHasKey('id', $responseData);
    $this->assertArrayHasKey('title', $responseData);
    $this->assertArrayHasKey('author', $responseData);
  }

  public function testDelete()
  {

    $client = new Client();
    $url = 'http://localhost/api/books';
    $data = [
      'title' => 'Test Book',
      'author_id' => 1,
    ];
    $response = $client->post($url, [
      'json' => $data
    ]);
    $this->assertEquals(201, $response->getStatusCode());
    $responseData = json_decode($response->getBody(), true);
    $url = 'http://localhost/api/books/' . $responseData['id'];
    $response = $client->delete($url);
    $this->assertEquals(204, $response->getStatusCode());
  }

  public function testUpdate()
  {
    $client = new Client();
    $url = 'http://localhost/api/books';
    $data = [
      'title' => 'Test Book',
      'author_id' => 1,
    ];
    $response = $client->post($url, [
      'json' => $data
    ]);
    $this->assertEquals(201, $response->getStatusCode());
    $responseData = json_decode($response->getBody(), true);
    $url = 'http://localhost/api/books/' . $responseData['id'];
    $data = [
      'title' => 'Test Book 2',
      'author_id' => 2,
    ];
    $response = $client->put($url, [
      'json' => $data
    ]);
    $this->assertEquals(200, $response->getStatusCode());
    $responseData = json_decode($response->getBody(), true);
    $this->assertEquals($data['title'], $responseData['title']);
  }
}
