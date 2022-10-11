<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
  HttpToEarlyExceptionTest.php - Part of the php-exceptions project.

  © - Jitesoft
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
namespace Jitesoft\Exceptions\Tests\Http\Client;

use Jitesoft\Exceptions\Http\Client\HttpToEarlyException;
use Jitesoft\Exceptions\Tests\Http\HttpExceptionTest;

/**
 * @group Exceptions
 * @group HttpExceptions
 * @group RuntimeExceptions
 * @group HttpClientExceptions
 */
class HttpToEarlyExceptionTest extends HttpExceptionTest {

    protected $expectedErrorCode = 425;

    protected function throwDefaultException(): void {
        throw new HttpToEarlyException();
    }

    public function throwMessageException(string $message): void {
        throw new HttpToEarlyException($message);
    }

}
