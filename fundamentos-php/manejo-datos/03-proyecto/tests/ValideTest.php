<?php

use PHPUnit\Framework\TestCase;
use App\Validate;

class ValideTest extends TestCase
{
  public function test_email()
  {
    $email = validate::email("i@email.com");
    $this->assertTrue($email);
  }
}
