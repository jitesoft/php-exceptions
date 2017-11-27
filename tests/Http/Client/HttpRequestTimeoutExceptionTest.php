<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  HttpRequestTimeoutExceptionTest.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Tests\Http\Client;

use Jitesoft\Exceptions\Http\Client\HttpRequestTimeoutException;
use Jitesoft\Exceptions\Tests\Http\HttpExceptionTest;

/**
 * @group Exceptions
 * @group HttpExceptions
 * @group RuntimeExceptions
 * @group HttpClientExceptions
 */
class HttpRequestTimeoutExceptionTest extends HttpExceptionTest {

    protected $expectedErrorCode = 408;

    protected function throwDefaultException() {
        throw new HttpRequestTimeoutException();
    }

    public function throwMessageException(string $message) {
        throw new HttpRequestTimeoutException($message);
    }

}
