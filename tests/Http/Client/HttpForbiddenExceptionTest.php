<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  HttpForbiddenExceptionTest.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Tests\Http\Client;

use Jitesoft\Exceptions\Http\Client\HttpForbiddenException;
use Jitesoft\Exceptions\Tests\Http\HttpExceptionTest;

/**
 * @group Exceptions
 * @group HttpExceptions
 * @group RuntimeExceptions
 * @group HttpClientExceptions
 */
class HttpForbiddenExceptionTest extends HttpExceptionTest {

    protected $expectedErrorCode = 403;

    protected function throwDefaultException() {
        throw new HttpForbiddenException();
    }

    public function throwMessageException(string $message) {
        throw new HttpForbiddenException($message);
    }

}
