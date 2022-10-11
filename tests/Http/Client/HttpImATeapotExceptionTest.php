<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  HttpImATeapotExceptionTest.php - Part of the php-exceptions project.

  © - Jitesoft
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Tests\Http\Client;

use Jitesoft\Exceptions\Http\Client\HttpImATeapotException;
use Jitesoft\Exceptions\Tests\Http\HttpExceptionTest;

/**
 * @group Exceptions
 * @group HttpExceptions
 * @group RuntimeExceptions
 * @group HttpClientExceptions
 */
class HttpImATeapotExceptionTest extends HttpExceptionTest {

    protected $expectedErrorCode = 418;

    protected function throwDefaultException() {
        throw new HttpImATeapotException();
    }

    public function throwMessageException(string $message) {
        throw new HttpImATeapotException($message);
    }

}
