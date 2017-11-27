<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  HttpInternalServerErrorExceptionTest.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Tests\Http\Server;

use Jitesoft\Exceptions\Http\Server\HttpInternalServerErrorException;
use Jitesoft\Exceptions\Tests\Http\HttpExceptionTest;

/**
 * @group Exceptions
 * @group HttpExceptions
 * @group RuntimeExceptions
 * @group HttpServerExceptions
 */
class HttpInternalServerErrorExceptionTest extends HttpExceptionTest {

    protected $expectedErrorCode = 500;

    protected function throwDefaultException() {
        throw new HttpInternalServerErrorException();
    }

    public function throwMessageException(string $message) {
        throw new HttpInternalServerErrorException($message);
    }

}
