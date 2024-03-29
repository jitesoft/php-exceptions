<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  HttpUnsupportedMediaTypeExceptionTest.php - Part of the php-exceptions project.

  © - Jitesoft 2017
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Tests\Http\Client;

use Jitesoft\Exceptions\Http\Client\HttpUnsupportedMediaTypeException;
use Jitesoft\Exceptions\Tests\Http\HttpExceptionTest;

/**
 * @group Exceptions
 * @group HttpExceptions
 * @group RuntimeExceptions
 * @group HttpClientExceptions
 */
class HttpUnsupportedMediaTypeExceptionTest extends HttpExceptionTest {

    protected $expectedErrorCode = 415;

    protected function throwDefaultException(): void {
        throw new HttpUnsupportedMediaTypeException();
    }

    public function throwMessageException(string $message) : void {
        throw new HttpUnsupportedMediaTypeException($message);
    }

}
