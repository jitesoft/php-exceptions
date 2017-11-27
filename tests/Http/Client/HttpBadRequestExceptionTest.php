<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  HttpBadRequestExceptionTest.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Tests\Http\Client;

use Jitesoft\Exceptions\Http\Client\HttpBadRequestException;
use Jitesoft\Exceptions\Tests\Http\HttpExceptionTest;

/**
 * @group Exceptions
 * @group HttpExceptions
 * @group RuntimeExceptions
 * @group HttpClientExceptions
 */
class HttpBadRequestExceptionTest extends HttpExceptionTest {

    protected $expectedErrorCode = 400;

    protected function throwDefaultException() {
        throw new HttpBadRequestException();
    }

    public function throwMessageException(string $message) {
        throw new HttpBadRequestException($message);
    }

}
