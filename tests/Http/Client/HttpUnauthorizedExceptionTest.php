<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  HttpUnauthorizedExceptionTest.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Tests\Http\Client;

use Jitesoft\Exceptions\Http\Client\HttpUnauthorizedException;
use Jitesoft\Exceptions\Tests\Http\HttpExceptionTest;

/**
 * @group Exceptions
 * @group HttpExceptions
 * @group RuntimeExceptions
 * @group HttpClientExceptions
 */
class HttpUnauthorizedExceptionTest extends HttpExceptionTest {

    protected $expectedErrorCode = 401;

    protected function throwDefaultException() {
        throw new HttpUnauthorizedException();
    }

    public function throwMessageException(string $message) {
        throw new HttpUnauthorizedException($message);
    }

}
