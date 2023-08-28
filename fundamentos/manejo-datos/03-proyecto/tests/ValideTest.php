<?php

use PHPUnit\Framework\TestCase;
use App\Validate;

class ValideTest extends TestCase
{
  // los metodos tambien se pueden nombrar así
  // 1) test_metodo
  // 2) testMetodo
  public function test_email()
  {
    $email = validate::email("i@email.com");
    $this->assertTrue($email);

    $email = validate::email("i@@email,com");
    $this->assertFalse($email);
  }

  public function test_url()
  {
    $url = validate::url("https://google.com");
    $this->assertTrue($url);

    $url = validate::url("www,google,com");
    $this->assertFalse($url);
  }

  public function test_ip()
  {
    $ip = validate::ip("192.168.1.100");
    $this->assertTrue($ip);

    $ip = validate::email("192.1681,100");
    $this->assertFalse($ip);
  }
}
