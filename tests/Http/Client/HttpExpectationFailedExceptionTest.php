<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  HttpExpectationFailedExceptionTest.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Tests\Http\Client;

use Jitesoft\Exceptions\Http\Client\HttpExpectationFailedException;
use Jitesoft\Exceptions\Tests\Http\HttpExceptionTest;

/**
 * @group Exceptions
 * @group HttpExceptions
 * @group RuntimeExceptions
 * @group HttpClientExceptions
 */
class HttpExpectationFailedExceptionTest extends HttpExceptionTest {

    protected $expectedErrorCode = 417;

    protected function throwDefaultException() {
        throw new HttpExpectationFailedException();
    }

    public function throwMessageException(string $message) {
        throw new HttpExpectationFailedException($message);
    }


}
