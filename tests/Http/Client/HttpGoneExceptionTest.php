<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  HttpGoneExceptionTest.php - Part of the php-exceptions project.

  © - Jitesoft
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Tests\Http\Client;

use Jitesoft\Exceptions\Http\Client\HttpGoneException;
use Jitesoft\Exceptions\Tests\Http\HttpExceptionTest;

/**
 * @group Exceptions
 * @group HttpExceptions
 * @group RuntimeExceptions
 * @group HttpClientExceptions
 */
class HttpGoneExceptionTest extends HttpExceptionTest {

    protected $expectedErrorCode = 410;

    protected function throwDefaultException(): void {
        throw new HttpGoneException();
    }

    public function throwMessageException(string $message): void {
        throw new HttpGoneException($message);
    }

}
