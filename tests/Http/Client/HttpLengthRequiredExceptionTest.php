<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  HttpLengthRequiredExceptionTest.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Tests\Http\Client;

use Jitesoft\Exceptions\Http\Client\HttpLengthRequiredException;
use Jitesoft\Exceptions\Tests\Http\HttpExceptionTest;

/**
 * @group Exceptions
 * @group HttpExceptions
 * @group RuntimeExceptions
 * @group HttpClientExceptions
 */
class HttpLengthRequiredExceptionTest extends HttpExceptionTest {

    protected $expectedErrorCode = 411;

    protected function throwDefaultException() {
        throw new HttpLengthRequiredException();
    }

    public function throwMessageException(string $message) {
        throw new HttpLengthRequiredException($message);
    }

}
