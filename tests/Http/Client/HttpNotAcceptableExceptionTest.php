<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  HttpNotAcceptableExceptionTest.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Tests\Http\Client;

use Jitesoft\Exceptions\Http\Client\HttpNotAcceptableException;
use Jitesoft\Exceptions\JitesoftException;
use Jitesoft\Exceptions\Tests\Http\HttpExceptionTest;

/**
 * @group Exceptions
 * @group HttpExceptions
 * @group RuntimeExceptions
 * @group HttpClientExceptions
 */
class HttpNotAcceptableExceptionTest extends HttpExceptionTest {

    protected $expectedErrorCode = 406;

    protected function throwDefaultException() {
        throw new HttpNotAcceptableException();
    }

    public function throwMessageException(string $message) {
        throw new HttpNotAcceptableException($message);
    }

}
