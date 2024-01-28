<?php

require 'vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use GuzzleHttp\Client;

class CountryTest extends TestCase
{
  public function testGet()
  {
    $client = new Client();
    $url = 'http://localhost/api/countries';
    $response = $client->get($url);
    $this->assertEquals(200, $response->getStatusCode());
  }

  public function testPost()
  {
    $client = new Client();
    $url = 'http://localhost/api/countries';
    $data = [
      'name' => 'Test country',
    ];
    $response = $client->post($url, [
      'json' => $data
    ]);

    $this->assertEquals(201, $response->getStatusCode());
    $responseData = json_decode($response->getBody(), true);

    $this->assertArrayHasKey('id', $responseData);
    $this->assertArrayHasKey('name', $responseData);
    $this->assertArrayHasKey('authors', $responseData);
    $this->assertArrayHasKey('books', $responseData);
    $this->assertEquals($data['name'], $responseData['name']);
  }

  public function testShow()
  {
    $client = new Client();
    $url = 'http://localhost/api/countries/1';
    $response = $client->get($url);
    $responseData = json_decode($response->getBody(), true);
    $this->assertEquals(200, $response->getStatusCode());
    $this->assertArrayHasKey('id', $responseData);
    $this->assertArrayHasKey('name', $responseData);
    $this->assertArrayHasKey('authors', $responseData);
    $this->assertArrayHasKey('books', $responseData);
  }

  public function testDelete()
  {

    $client = new Client();
    $url = 'http://localhost/api/countries';
    $data = [
      'name' => 'Test country',
    ];
    $response = $client->post($url, [
      'json' => $data
    ]);
    $this->assertEquals(201, $response->getStatusCode());
    $responseData = json_decode($response->getBody(), true);
    $url = 'http://localhost/api/countries/' . $responseData['id'];
    $response = $client->delete($url);
    $this->assertEquals(204, $response->getStatusCode());
  }

  public function testUpdate()
  {
    $client = new Client();
    $url = 'http://localhost/api/countries';
    $data = [
      'name' => 'Test country',
    ];
    $response = $client->post($url, [
      'json' => $data
    ]);
    $this->assertEquals(201, $response->getStatusCode());
    $responseData = json_decode($response->getBody(), true);
    $url = 'http://localhost/api/countries/' . $responseData['id'];
    $data = [
      'name' => 'Test country updated',
    ];
    $response = $client->put($url, [
      'json' => $data
    ]);
    $this->assertEquals(200, $response->getStatusCode());
    $responseData = json_decode($response->getBody(), true);
    $this->assertEquals($data['name'], $responseData['name']);
  }
}
